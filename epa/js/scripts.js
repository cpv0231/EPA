  

$(function() {
  $('.productsAjax').hide();
  $(".preload").fadeOut(1000, function() {
    $(".productsAjax").fadeIn(1000);
  });
});


function toggle_visibility(id) {
 var e = document.getElementById(id);
 if(e.style.display == 'block')
  e.style.display = 'none';
else
  e.style.display = 'block';
}
//-->
// ajax sort
$('#sort').on('change',function(e){
  console.log(e);
  var sort = e.target.value;
  var subcategory = urlSubcategory;
  $('.productsAjax').hide();
  $(".preload").fadeOut(2500);
  $.ajax({
    type:'get',
    url : urlSort,
    data :{'priceSort':sort, 'subcategory':subcategory},
    success:function(data){
      $(function() {
        $(".preload").fadeOut(2500, function() {
          $('.productsAjax').html(data).fadeIn(1000);
        });
      });
    }
  });
});
// ajax load search

$('#keyword').on('keyup', function(){
  var value = $(this).val();
  var subcategory = urlSubcategory;
  console.log(value);

  $('.productsAjax').hide();
  $(".preload").fadeOut(2500);
  $.ajax({
    type:'get',
    url : urlSearch,
    data :{'keyword':value, 'subcategory':subcategory},
    success:function(data){
      $(function() {
        $(".preload").fadeOut(2500, function() {
          $('.productsAjax').html(data).fadeIn(1000);
        });
      });
    }
  });
});


    //Listen for 'change' event, so this triggers when the user clicks on the checkboxes labels
    $('input[name="brands[]"]').on('change', function (e) {

      var subcategory = urlSubcategory;       
         var brands = new Array(); // reset 
         $('input[name="brands[]"]:checked').each(function()
         {
           brands.push($(this).val());
           console.log($(this).val());
           if(this.checked){
             $.ajax({
              type: "GET",
              url:urlBrands,
              data: { 'brands':brands , 'subcategory':subcategory },
              success: function(data){
                $('.productsAjax').html(data).delay( 8000 );
              }

            });

           }
         });
       });



    $(document).ready(function () {
      var outputSpan = $('#spanOutput');
      var sliderDiv = $('#slider');
      var subcategory = urlSubcategory;

      sliderDiv.slider({ range: true, 
        min: 100,
        max: 70000,
        values: [500, 40000], 
        slide: function (event, ui) {
         outputSpan.html(ui.values[0] + ' - ' + ui.values[1] );
       } ,
       stop: function (event, ui) {
         var min = ui.values[0];
         var max = ui.values[1];
         console.log(min+'-'+max);

         $('.productsAjax').hide();
         $(".preload").fadeOut(2500);

         $.ajax({
          type: "GET",
          url:urlPrice,
          data: {'min_price':min ,'max_price':max , 'subcategory':subcategory },
          success: function(data){
           $(function() {
            $(".preload").fadeOut(2500, function() {
              $('.productsAjax').html(data).fadeIn(1000);
            });
          });
         }

       });
         $('#min_price').val(ui.values[0]);
         $('#max_price').val(ui.values[1]); }
       });
      outputSpan.html(sliderDiv.slider('values', 0) + 
        ' - ' + sliderDiv.slider('values', 1) );
      $('#min_price').val(sliderDiv.slider('values', 0)); 
      $('#max_price').val(sliderDiv.slider('values', 1));


    //var brands = [];

    // Listen for 'change' event, so this triggers when the user clicks on the checkboxes labels
    $('input[name="brands[]"]').on('change', function (e) {
     $('.productsAjax').empty();
     e.preventDefault();
       var brands = new Array(); // reset 

       var subcategory = urlSubcategory;

       $('input[name="brands[]"]:checked').each(function()
       {
         brands.push($(this).val());
         console.log(brands.push($(this).val()));

         if(this.checked){
          var outputSpan = $('#spanOutput');
          var sliderDiv = $('#slider');

          sliderDiv.slider({ range: true, 
            min: 100,
            max: 70000,
            values: [500, 40000], 
            slide: function (event, ui) {
             outputSpan.html(ui.values[0] + ' - ' + ui.values[1] );
           } ,
           stop: function (event, ui) {
             var min = ui.values[0];
             var max = ui.values[1];
             console.log(min+'-'+max);
             $('#min_price').val(ui.values[0]);
             $('#max_price').val(ui.values[1]); 
                 // checkbox is checked -> do something
                 $.ajax({
                  type: "GET",
                  url:urlBrands,
                  data: {'brands':brands ,'min_price':min , 'max_price':max , 'subcategory':subcategory },
                  success: function(data){
                    $('.productsAjax').html(data);
                  }

                });
               } 
             });
        }
      });
       outputSpan.html(sliderDiv.slider('values', 0) + 
        ' - ' + sliderDiv.slider('values', 1) );
       $('#min_price').val(sliderDiv.slider('values', 0)); 
       $('#max_price').val(sliderDiv.slider('values', 1));
     });

  });

//hover navigation
$(document).ready(function(){
  $(".dropdown").hover(            
    function() {
      $('.dropdown-menu', this).stop( true, true ).fadeIn(440);
      $(this).toggleClass('open');        
    },
    function() {
      $('.dropdown-menu', this).stop( true, true ).fadeOut(2);
      $(this).toggleClass('open');       
    }
    );
});


$(document).scroll(function () {
  var y = $(this).scrollTop();
  if (y > 300) {
    $('.brands').fadeIn();
  } else {
    $('.brands').fadeOut();
  }

});

//hide session
    setTimeout( function(){
    $('#divSession').slideUp('slow',function(){
      console.log('done');
    });
    },2000 );
 

// sidebar toggle
$(document).ready(function(e){
  $('.has-sub').click(function(){
    $(this).toggleClass('tap');
  });
});


$('#category').on('change',function(e){
  var category_id = e.target.value;
  console.log(category_id);
  $('#subcategory').empty();    

  $.get('epa/ajax-category?category_id='+ category_id, function(data){

    $.each(data, function(index, subcatObj){
      $('#subcategory').append('<option value="'+subcatObj.id+'"> '+ subcatObj.subcategory_name + '</option>');
    });
  });
});


$('.category').find('.thumbnail').hover(
  function(){
    $(this).find('.caption').fadeOut(250); //.fadeOut(205)
    
  },
  function(){
    $(this).find('.caption').fadeIn(250); //.fadeIn(250)
  }
  ); 


//initiate the plugin and pass the id of the div containing gallery images
$("#img_01").elevateZoom({gallery:'gallery_01', cursor: 'pointer', galleryActiveClass: 'active', imageCrossfade: true, loadingIcon: 'http://www.elevateweb.co.uk/spinner.gif'}); 

//pass the images to Fancybox
$("#img_01").bind("click", function(e) {  
  var ez =   $('#img_01').data('elevateZoom'); 
  $.fancybox(ez.getGalleryList());
  return false;
});
