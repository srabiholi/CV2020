$('.xpLine').hover( function() {
    $(this).toggleClass('shadow-2xl');
    $(this).toggleClass('shadow');
});

$( document ).ready(function() {
 
    $('.xpLine').click( function() {
        $('.content').fadeIn('1000');

    });

});



                        // Requete AJAX

$( document ).ready(function() {
$('.action').click(function(){
    // console.log(event);

    var id = $(this).data().id;
    // console.log(id);
    $.ajax({
        type: 'GET',
        data: { id: id },
        url: './Modele/ajax.php'
    }).done(function (response) {
        // console.log(response);
        result = JSON.parse(response);
        result = result.tache;
        result = result.split('-');
        // console.log(result);
        
        $('#result').children().remove();
        
        var ul;
        content = document.getElementById("result");
        ul = document.createElement('ul');
        content.append(ul);
        

        for( var i = 0; i < result.length; i++ ){
            var li;
            li = document.createElement('li');
            li.innerHTML = result[i];
            ul.append(li);
        }
        
        // console.log(ul);
});
});
});

            // Centre d'interet

$('.hobbies').click(function(){
    $('.test').fadeIn('1000');
    $('#result').children().remove();
});