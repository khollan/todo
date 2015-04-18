var ListCreator = function () {
    return this.init();
}

ListCreator.prototype = {
    addItem: function (module) {
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
           console.log(rsp);
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
        });

    },


    init: function () {
        this.bind();
        return this;
    }

}


var list_creator = new ListCreator();
