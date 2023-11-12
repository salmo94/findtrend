$("#modal-form").submit(function(e) {
     e.preventDefault();
     FormHandler.handleSubmit();
});

let FormHandler = {
     handleSubmit: function () {
          this.validate();
          $.ajax({
               type: 'post',
               url: 'site/send',
               data: $("#modal-form").serializeArray(),
               success: () => {
                 console.log('fsfssdfsd')
                    $('#modal').modal('toggle');
                    $('#modal-form').trigger("reset");
               },
               error: () => alert('server error')
          });
     },

     validate: function () {
          $("#modal-form").validate({
               rules: {
                    name: {
                         required: true,
                    },
                    email: {
                         required: true,
                         email: true
                    },
               },
          });
     },
};