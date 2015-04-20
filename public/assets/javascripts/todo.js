var ListCreator = function () {
    return this.init();
}

ListCreator.prototype = {
    addItem: function (data) {
        var obj = this;
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
            if (rsp.status === 'ok') {
                obj.list_item_container.html(rsp.html);
            }

        })
        .fail(function (rsp) {
            console.log('Error!!');
        })
        .always(function(){
            $(".form-container").hide();
            $("#input-item").val("");
        });
    },


    bind: function () {
        var obj = this;

        $(".form-container").on('submit', '.items-form', function(e){
            e.preventDefault();
            var data = $("#input-item").val();
            obj.addItem(data);
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

        $(".list-item-container").on('click', '.delete', function(e){
            var item_id = $(this).data('item-id');
            obj.deleteItem(item_id);
        });

        $(".show-form-button").on('click', function(){
            $(".form-container").show();
            $("#input-item").focus();
        });

    },

    deleteItem: function(item_id) {
        var obj = this;
        $.ajax({
            type: 'POST',
            url: 'delete_item',
            data: {
                item_id: item_id
            },
            timeout: 10000,
            dataType: 'json'
        })
        .success(function (rsp) {
            obj.list_item_container.html(rsp);
        })
        .fail(function (rsp) {
            console.log('Error!!');
        });
    },


    init: function () {
        var obj = this;
        this.bind();
        obj.insertList();
        return this;
    },


    insertList: function () {
        var obj = this;
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
           obj.list_item_container.html(rsp);
        })
        .fail(function (rsp) {
            console.log('Error!!');
        });
    },

    list_item_container: $('.list-item-container'),

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
