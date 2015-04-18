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
    }

}


var list_creator = new ListCreator();
