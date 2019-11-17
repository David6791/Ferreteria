$(function(){
    $('.send_form').click(function(){ 
        url = $(this).attr('href')        
        $("#contentGlobal").html('')
        $("#contentGlobal").load(url)
        return false;
    })
    $(document).on('submit','.send_user_dates',function(e){
        var formData = new FormData($(this)[0]);
        frutas = []
        $('.name_form').each(function(){
            aux = $(this).attr("name")
            frutas.push(aux)
        })
        $.ajaxSetup({
            header:$('meta[name="_token"]').attr('content')
        })
        e.preventDefault(e)
        $.ajax({
            type:$(this).attr('method'),
            url:$(this).attr('action'),
            data:formData,
            contentType: false,
            processData: false,
            success:function(data){
                $(".load_tabel_medics").html(data)
            },
            error:function(data){
                console.log('error')
                var asd = Object.keys(data.responseJSON.errors)
                for(i = 0; i<frutas.length; i++){
                    if(asd.includes(frutas[i])) {
                        $( "input[name='"+frutas[i]+"']" ).parent().parent().find("small").text(data.responseJSON.errors[frutas[i]][0])                        
                    }else{
                        $( "input[name='"+frutas[i]+"']" ).parent().parent().find("small").text('')                        
                    }
                }
            }
        })
    })
    $(document).on('change','.fileview',function(e){
        var preview = document.querySelector('img');
            var file    = document.querySelector('input[type=file]').files[0];
            var reader  = new FileReader();
            console.log(reader)
            $('#imagens').append(file)
            reader.onloadend = function () {
                preview.src = reader.result;
            }

            if (file) {
                console.log(reader.readAsDataURL(file))
                reader.readAsDataURL(file);
            } else {
                console.log("no")
                preview.src = "";
            }
        console.log("imagen upload")
    });    
})


