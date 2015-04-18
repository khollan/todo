var ListCreator = function () {
    return this.init();
}

ListCreator.prototype = {
    addItem: function (module) {
        var list_item_container = $('.list-item-container');
        var data = module;
        $.ajax({
            type: 'POST',
            url: 'add_item',
            data: {
                data: data
            },
            timeout: 10000,
            dataType: 'json'
        })
        .success(function (rsp) {
            list_item_container.html(rsp);
        })
        .fail(function (rsp) {
            console.log('Error!!');
        });
    },


    bind: function () {
        var obj = this;

        $(".show-form-button").on('click', function(){
            $(".form-container").show();
        });

        $(".form-container").on('submit', '.items-form', function(e){
            e.preventDefault();
            var data = $("#input-item").val();
            obj.addItem(data);
            $(".form-container").hide();
        });

        $(".list-item-container").on('change', '.checkbox', function(){
            var item_id = $(this).data('item-id');
           if($(this).is(':checked')){
                var done = 'checked';
                $(this).parent().removeClass('unchecked');
                $(this).parent().addClass('checked');
                obj.updateItem(item_id, done);
           }
           else{
                var done = 'unchecked';
                $(this).parent().removeClass('checked');
                $(this).parent().addClass('unchecked');
                obj.updateItem(item_id, done);
           }
        });

    },


    init: function () {
        var obj = this;
        this.bind();
        obj.insertList();
        return this;
    },

    insertList: function (module) {
        var list_item_container = $('.list-item-container');
        $.ajax({
            type: 'get',
            url: 'show_items',
            data: {
                data: "ok"
            },
            timeout: 10000,
            dataType: 'json'
        })
        .success(function (rsp) {
           list_item_container.html(rsp);
        })
        .fail(function (rsp) {
            console.log('Error!!');
        });
    },

    updateItem: function (item_id, done) {
        $.ajax({
            type: 'POST',
            url: 'update_item',
            data: {
                item_id: item_id,
                done: done
            },
            timeout: 10000,
            dataType: 'json'
        })
        .success(function (rsp) {
        })
        .fail(function (rsp) {
            console.log('Error!!');
        });
    }

}


var list_creator = new ListCreator();
