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
            console.log('dela');
            $(".form-container").show();
        });

        $(".form-container").on('submit', '.items-form', function(e){
            e.preventDefault();
            var data = obj.getInputValue(this);
            console.log(data);
            obj.addItem(data);
        });

    },

    getInputValue: function (obj) {
        var obj = $(obj);
        var data = obj.serializeArray();
        var inputs = {};
        $.each(data, function(key, value) {
            if (typeof inputs[value.name] !== 'undefined') {
                if (!inputs[value.name].push) {
                    inputs[value.name] = [inputs[value.name]];
                }

                inputs[value.name].push(value.value);
            } else {
                inputs[value.name] = value.value;
            }

        });

        return inputs;
    },


    init: function () {
        this.bind();
        return this;
    }

}


var list_creator = new ListCreator();
