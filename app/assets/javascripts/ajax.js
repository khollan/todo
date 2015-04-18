console.log('ballllls!');

/*var ListCreator = function () {
    return this.init();
}

ListCreator.prototype = {
    bind: function () {
        var obj = this;

        $(".show-form-button").on('click', function(){
            console.log('dela');
            obj.insertForm('/open_form');
        });

    },

    insertForm: function (module) {
        var form_container = $('.form-container');
        var url = module;
        console.log(url);
        $.ajax({
            type: 'get',
            url: url,
            data: {
                data: "ok"
            },
            timeout: 10000,
            dataType: 'json'
        })
        .success(function (rsp) {
           side_nav_container.html(rsp);
        })
        .fail(function (rsp) {
            console.log('Error!!');
        });
    },

    init: function () {
        this.bind();
        return this;
    }

}


var list_creator = new ListCreator();*/
