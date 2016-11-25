 $('#province').on('change',function(e){
        console.log(e);
        var provCode = e.target.value;
        console.log(provCode);
            
        $.get('epa/ajax-muncipality?province_id='+ provCode, function(data){
            $('#citymunicipality').empty();
            $.each(data, function(index, subcatObj){
                   timeout: 10000 
           $('#citymunicipality').append('<option value="'+subcatObj.id+'"> '+ subcatObj.city_name + '</option>');
            });
        });
    });

   $('#citymunicipality').on('change',function(e){
        console.log(e);
        var city_id = e.target.value;
            
        $.get('epa/ajax-brgy?city_id='+ city_id, function(data){
            $('#brgy').empty();
            $.each(data, function(index, subcatObj){
                timeout: 10000
           $('#brgy').append('<option value="'+subcatObj.id+'"> '+ subcatObj.brgy_name + '</option>');
            });
        });
    });

