$(document).ready(function(){

    $("#myform").validate({
        // правила для полей с именем и паролем
        rules:{
            name:{
                required: true, // поле для имени обязательное для заполнения
                minlength: 2, // в поле для имени должно быть не меньше 4 символов
                maxlength: 16, // в поле для имени должно быть не больше 16 символов
            },
            lastname:{
                required: true, // поле для имени обязательное для заполнения
                minlength: 2, // в поле для имени должно быть не меньше 4 символов
                maxlength: 16, // в поле для имени должно быть не больше 16 символов
            },
            password:{
                required: true, // поле для имени обязательное для заполнения
                minlength: 6, // в поле для имени должно быть не меньше 4 символов
                maxlength: 16, // в поле для имени должно быть не больше 16 символов
            },
            password_second:{
                required: true, // поле для имени обязательное для заполнения
                minlength: 6, // в поле для имени должно быть не меньше 6 символов
                maxlength: 16, // в поле для имени должно быть не больше 16 символов
                equalTo: "#password"
            },
            email: {
                required: true,
                email: true
            },
            sex: {
                required: true,
            },
            date: {
                required: true,
            },
        },
        // сообщение для поля с именем и пароля, если что-то было не по правилам
        messages:{
            name:{
                required: " Це поле обов'язково для заповнення", // сообщение для имени, если поле не заполнено
                minlength: " Це поле повинно містити мінімум 2 символів", // сообщение для имени, если в поле меньше 4 символов
                maxlength: " Максимальне число символів для імені - 16", // сообщение для имени, если в поле больше 16 символов
            },
            lastname:{
                required: " Це поле обов'язково для заповнення", // сообщение для имени, если поле не заполнено
                minlength: " Це поле повинно містити мінімум 2 символів", // сообщение для имени, если в поле меньше 4 символов
                maxlength: " Максимальне число символів для імені - 16", // сообщение для имени, если в поле больше 16 символов
            },
            password:{
                required: " Це поле обов'язково для заповнення", // сообщение для имени, если поле не заполнено
                minlength: " Це поле повинно містити мінімум 6 символів", // сообщение для имени, если в поле меньше 4 символов
                maxlength: " Максимальне число символів для імені - 16", // сообщение для имени, если в поле больше 16 символов
            },
            password_second:{
                required: " Це поле обов'язково для заповнення", // сообщение для имени, если поле не заполнено
                minlength: "Це поле повинно містити мінімум 6 символів", // сообщение для имени, если в поле меньше 4 символов
                maxlength: " Максимальне число символів для поля - 16", // сообщение для имени, если в поле больше 16 символов
                equalTo: "Паролі не співпадають!"
            },
            email:{
                required: " Це поле обов'язково для заповнення", // сообщение для email, если поле не заполнено
                email: " Email повинен бути в форматі test@test.com", // сообщение для email, если не верный формат
            },
            sex:{
                required: " Це поле обов'язково для заповнення", // сообщение для email, если поле не заполнено
            },
            date:{
                required: " Це поле обов'язково для заповнення", // сообщение для email, если поле не заполнено
            },
        }

    });

});