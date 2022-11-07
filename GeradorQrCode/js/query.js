
function gerar(){
    $.post("teste.php",
    {
      idCode: 'teste'
    },
    function(data, status){
      retorno = data;
      if(retorno[0] == ""){
        console.log(retorno[1]);
      }else{
        console.log(retorno[1]);
      }
    }
  );
   
};

