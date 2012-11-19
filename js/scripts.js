$(function(){
  // Création de l'objet 'date' (année / mois / jour) ici initialisé au : 9 mars 2012
  // Attention les mois commencent à 0 !
  var ts = new Date(2012, 11, 07);
  var newYear = true;
  
  if((new Date()) > ts){
    // The new year is here! Count towards something else.
    // Notice the *1000 at the end - time must be in milliseconds
    ts = (new Date()).getTime() + 10*24*60*60*1000;
    newYear = false;
  }
    
  $('#countdown').countdown({
    timestamp : ts,
    callback  : function(days, hours, minutes, seconds){
    }
  });
  
});
