$('#modal').on('click', function(){
    $.alert({
        columnClass: 'col-md-4 col-md-offset-4',
        containerFluid: true, // this will add 'container-fluid' instead of 'container'
        buttons: {
            закрити: {
                btnClass: 'btn-orange',
                action: function(){}
            }},
        title: 'Черкаський державний бізнес-коледж',
        content: '<p class="text-center"><iframe width="560" height="315" src="https://www.youtube.com/embed/udzgeQrhCFI?controls=0&rel=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>',
    });
});
