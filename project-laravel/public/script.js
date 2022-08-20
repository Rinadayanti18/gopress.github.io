// function() {
//   $('.index_db_txtbox').addClass('in')
// }

// $(document).ready(function() {
// $('.clicked').click(function(){
//   $('.index_db_txtbox').addClass('in');
// })
// });

$(document).ready(function(){
  $(window).scroll(function(){
      if(this.scrollY > 1){
          $('.rina').addClass("in");
      }else{
          $('.rina').removeClass("in");
      }
  })
  
  $('.menu_btn').click(function(){
      $('.navbar .menu').toggleClass("active")
      $('.menu_btn i').toggleClass("active")
  })
})

{/* <button onclick="displayDate()">The time is?</button>  */}