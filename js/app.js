
//CLIENTE
$(document).ready(function() {
    // Obtener el elemento seleccionado
    $("#getC").change(function() {
        var id = $(this).find(":selected").val();

        var dataString = 'action=' + id;

        $.ajax({
            url: 'php/salidas/GetClients.php',
            data: dataString,
            cache: false,
            success: function(r) {
                $("#displayc").html(r);
            }
        });
    })
});

//PRODUCTOS
//1
$(document).ready(function() {
    // Obtener el elemento seleccionado
    $("#getProducts").change(function() {
        var id = $(this).find(":selected").val();
        
        var dataString = 'action=' + id;
        
        $.ajax({
            url: 'php/salidas/GetProducts.php',
            data: dataString,
            cache: false,
            success: function(r) {
                $("#display").html(r);
            }
        });
    })
    
});

//2
$(document).ready(function() {
    // Obtener el elemento seleccionado
    $("#getProducts2").change(function() {
        var id = $(this).find(":selected").val();

        var dataString = 'action=' + id;

        $.ajax({
            url: 'php/salidas/GetProducts2.php',
            data: dataString,
            cache: false,
            success: function(r) {
                $("#display2").html(r);
            }
        });
    });
    
});

//3
$(document).ready(function() {
    // Obtener el elemento seleccionado
    $("#getProducts3").change(function() {
        var id = $(this).find(":selected").val();

        var dataString = 'action=' + id;

        $.ajax({
            url: 'php/salidas/GetProducts3.php',
            data: dataString,
            cache: false,
            success: function(r) {
                $("#display3").html(r);
            }
        });
    })
});

//4
$(document).ready(function() {
    // Obtener el elemento seleccionado
    $("#getProducts4").change(function() {
        var id = $(this).find(":selected").val();

        var dataString = 'action=' + id;

        $.ajax({
            url: 'php/salidas/GetProducts4.php',
            data: dataString,
            cache: false,
            success: function(r) {
                $("#display4").html(r);
            }
        });
    })
});


//5
$(document).ready(function() {
    // Obtener el elemento seleccionado
    $("#getProducts5").change(function() {
        var id = $(this).find(":selected").val();

        var dataString = 'action=' + id;

        $.ajax({
            url: 'php/salidas/GetProducts5.php',
            data: dataString,
            cache: false,
            success: function(r) {
                $("#display5").html(r);
            }
        });
    })
});



//6
$(document).ready(function() {
    // Obtener el elemento seleccionado
    $("#getProducts6").change(function() {
        var id = $(this).find(":selected").val();

        var dataString = 'action=' + id;

        $.ajax({
            url: 'php/salidas/GetProducts6.php',
            data: dataString,
            cache: false,
            success: function(r) {
                $("#display6").html(r);
            }
        });
    })
});



//7
$(document).ready(function() {
    // Obtener el elemento seleccionado
    $("#getProducts7").change(function() {
        var id = $(this).find(":selected").val();

        var dataString = 'action=' + id;

        $.ajax({
            url: 'php/salidas/GetProducts7.php',
            data: dataString,
            cache: false,
            success: function(r) {
                $("#display7").html(r);
            }
        });
    })
});



//8
$(document).ready(function() {
    // Obtener el elemento seleccionado
    $("#getProducts8").change(function() {
        var id = $(this).find(":selected").val();

        var dataString = 'action=' + id;

        $.ajax({
            url: 'php/salidas/GetProducts8.php',
            data: dataString,
            cache: false,
            success: function(r) {
                $("#display8").html(r);
            }
        });
    })
});



//9
$(document).ready(function() {
    // Obtener el elemento seleccionado
    $("#getProducts9").change(function() {
        var id = $(this).find(":selected").val();

        var dataString = 'action=' + id;

        $.ajax({
            url: 'php/salidas/GetProducts9.php',
            data: dataString,
            cache: false,
            success: function(r) {
                $("#display9").html(r);
            }
        });
    })
});


//10
$(document).ready(function() {
    // Obtener el elemento seleccionado
    $("#getProducts10").change(function() {
        var id = $(this).find(":selected").val();

        var dataString = 'action=' + id;

        $.ajax({
            url: 'php/salidas/GetProducts10.php',
            data: dataString,
            cache: false,
            success: function(r) {
                $("#display10").html(r);
            }
        });
    })
});


//11
$(document).ready(function() {
    // Obtener el elemento seleccionado
    $("#getProducts11").change(function() {
        var id = $(this).find(":selected").val();

        var dataString = 'action=' + id;

        $.ajax({
            url: 'php/salidas/GetProducts11.php',
            data: dataString,
            cache: false,
            success: function(r) {
                $("#display11").html(r);
            }
        });
    })
});
//12
$(document).ready(function() {
    // Obtener el elemento seleccionado
    $("#getProducts12").change(function() {
        var id = $(this).find(":selected").val();

        var dataString = 'action=' + id;

        $.ajax({
            url: 'php/salidas/GetProducts12.php',
            data: dataString,
            cache: false,
            success: function(r) {
                $("#display12").html(r);
            }
        });
    })
});
//13
$(document).ready(function() {
    // Obtener el elemento seleccionado
    $("#getProducts13").change(function() {
        var id = $(this).find(":selected").val();

        var dataString = 'action=' + id;

        $.ajax({
            url: 'php/salidas/GetProducts13.php',
            data: dataString,
            cache: false,
            success: function(r) {
                $("#display13").html(r);
            }
        });
    })
});
//14
$(document).ready(function() {
    // Obtener el elemento seleccionado
    $("#getProducts14").change(function() {
        var id = $(this).find(":selected").val();

        var dataString = 'action=' + id;

        $.ajax({
            url: 'php/salidas/GetProducts14.php',
            data: dataString,
            cache: false,
            success: function(r) {
                $("#display14").html(r);
            }
        });
    })
});
//15
$(document).ready(function() {
    // Obtener el elemento seleccionado
    $("#getProducts15").change(function() {
        var id = $(this).find(":selected").val();

        var dataString = 'action=' + id;

        $.ajax({
            url: 'php/salidas/GetProducts15.php',
            data: dataString,
            cache: false,
            success: function(r) {
                $("#display15").html(r);
            }
        });
    })
});
//16
$(document).ready(function() {
    // Obtener el elemento seleccionado
    $("#getProducts16").change(function() {
        var id = $(this).find(":selected").val();

        var dataString = 'action=' + id;

        $.ajax({
            url: 'php/salidas/GetProducts16.php',
            data: dataString,
            cache: false,
            success: function(r) {
                $("#display16").html(r);
            }
        });
    })
});



//Función que realiza la MUL
function mul() {
    var mul1 = document.factura.mul1.value;
    var mul2 = document.factura.mul2.value;
 
   
    try{
       //Calculamos el número escrito:
        mul1 = (isNaN(parseInt(mul1)))? 0 : parseInt(mul1);
        mul2 = (isNaN(parseInt(mul2)))? 0 : parseInt(mul2);
        
        document.factura.ingreso1.value = mul1*mul2;
        
    }
    //Si se produce un error no hacemos nada
    catch(e) {
        console.log(e);
    }

    Suma();


 }
 

 function mult() {
    var mul3 = document.factura.mul3.value;
    var mul4 = document.factura.mul4.value;
 
   
    try{
       //Calculamos el número escrito:
        mul3 = (isNaN(parseInt(mul3)))? 0 : parseInt(mul3);
        mul4 = (isNaN(parseInt(mul4)))? 0 : parseInt(mul4);
 
        document.factura.ingreso2.value = mul3*mul4;
        
    }
    //Si se produce un error no hacemos nada
    catch(e) {
        console.log(e);
    }
    Suma();
 }


 function mult3() {
    var mul5 = document.factura.mul5.value;
    var mul6 = document.factura.mul6.value;
 
   
    try{
       //Calculamos el número escrito:
        mul5 = (isNaN(parseInt(mul5)))? 0 : parseInt(mul5);
        mul6 = (isNaN(parseInt(mul6)))? 0 : parseInt(mul6);
 
        document.factura.ingreso3.value = mul5*mul6;
        
    }
    //Si se produce un error no hacemos nada
    catch(e) {
        console.log(e);
    }
    Suma();
 }

 
 function mult4() {
    var mul7 = document.factura.mul7.value;
    var mul8 = document.factura.mul8.value;
 
   
    try{
       //Calculamos el número escrito:
        mul7 = (isNaN(parseInt(mul7)))? 0 : parseInt(mul7);
        mul8 = (isNaN(parseInt(mul8)))? 0 : parseInt(mul8);
 
        document.factura.ingreso4.value = mul7*mul8;
        
    }
    //Si se produce un error no hacemos nada
    catch(e) {
        console.log(e);
    }
    Suma();
 }
 function mult5() {
    var mul9 = document.factura.mul9.value;
    var mul10 = document.factura.mul10.value;
 
   
    try{
       //Calculamos el número escrito:
        mul9 = (isNaN(parseInt(mul9)))? 0 : parseInt(mul9);
        mul10 = (isNaN(parseInt(mul10)))? 0 : parseInt(mul10);
 
        document.factura.ingreso5.value = mul9*mul10;
        
    }
    //Si se produce un error no hacemos nada
    catch(e) {
        console.log(e);
    }
    Suma();
 }

 function mult6() {
    var mul11 = document.factura.mul11.value;
    var mul12 = document.factura.mul12.value;
 
   
    try{
       //Calculamos el número escrito:
        mul11 = (isNaN(parseInt(mul11)))? 0 : parseInt(mul11);
        mul12 = (isNaN(parseInt(mul12)))? 0 : parseInt(mul12);
 
        document.factura.ingreso6.value = mul11*mul12;
        
    }
    //Si se produce un error no hacemos nada
    catch(e) {
        console.log(e);
    }
    Suma();
 }

 function mult7() {
    var mul13 = document.factura.mul13.value;
    var mul14 = document.factura.mul14.value;
 
   
    try{
       //Calculamos el número escrito:
        mul3 = (isNaN(parseInt(mul13)))? 0 : parseInt(mul13);
        mul4 = (isNaN(parseInt(mul14)))? 0 : parseInt(mul14);
 
        document.factura.ingreso7.value = mul13*mul14;
        
    }
    //Si se produce un error no hacemos nada
    catch(e) {
        console.log(e);
    }
    Suma();
 }
 function mult8() {
    var mul15 = document.factura.mul15.value;
    var mul16 = document.factura.mul16.value;
 
   
    try{
       //Calculamos el número escrito:
        mul15 = (isNaN(parseInt(mul15)))? 0 : parseInt(mul15);
        mul16 = (isNaN(parseInt(mul16)))? 0 : parseInt(mul16);
 
        document.factura.ingreso8.value = mul15*mul16;
        
    }
    //Si se produce un error no hacemos nada
    catch(e) {
        console.log(e);
    }
    Suma();
 }

 function mult9() {
    var mul17 = document.factura.mul17.value;
    var mul18 = document.factura.mul18.value;
 
   
    try{
       //Calculamos el número escrito:
        mul17 = (isNaN(parseInt(mul17)))? 0 : parseInt(mul17);
        mul18 = (isNaN(parseInt(mul18)))? 0 : parseInt(mul18);
 
        document.factura.ingreso9.value = mul17*mul18;
    }
    //Si se produce un error no hacemos nada
    catch(e) {
        console.log(e);
    }
    Suma();
 }


 function mult10() {
    var mul19 = document.factura.mul19.value;
    var mul20 = document.factura.mul20.value;
 
   
    try{
       //Calculamos el número escrito:
        mul19 = (isNaN(parseInt(mul19)))? 0 : parseInt(mul19);
        mul20 = (isNaN(parseInt(mul20)))? 0 : parseInt(mul20);
 
        document.factura.ingreso10.value = mul19*mul20;
        
    }
    //Si se produce un error no hacemos nada
    catch(e) {
        console.log(e);
    }
    Suma();
 }

 function mult11() {
    var mul30 = document.factura.mul30.value;
    var mul31 = document.factura.mul31.value;
 
   
    try{
       //Calculamos el número escrito:
        mul30 = (isNaN(parseInt(mul30)))? 0 : parseInt(mul30);
        mul31 = (isNaN(parseInt(mul31)))? 0 : parseInt(mul31);
 
        document.factura.ingreso11.value = mul30*mul31;
        
    }
    //Si se produce un error no hacemos nada
    catch(e) {
        console.log(e);
    }
    Suma();
 }




 function mult12() {
    var mul32 = document.factura.mul32.value;
    var mul33 = document.factura.mul33.value;
 
   
    try{
       //Calculamos el número escrito:
       mul32 = (isNaN(parseInt(mul32)))? 0 : parseInt(mul32);
       mul33 = (isNaN(parseInt(mul33)))? 0 : parseInt(mul33);
 
        document.factura.ingreso12.value = mul32*mul33;
        
    }
    //Si se produce un error no hacemos nada
    catch(e) {
        console.log(e);
    }
    Suma();
 } 
 
 function mult13() {
    var mul34 = document.factura.mul34.value;
    var mul35 = document.factura.mul35.value;
 
   
    try{
       //Calculamos el número escrito:
       mul34 = (isNaN(parseInt(mul34)))? 0 : parseInt(mul34);
        mul35 = (isNaN(parseInt(mul35)))? 0 : parseInt(mul35);
 
        document.factura.ingreso13.value = mul34*mul35;
        
    }
    //Si se produce un error no hacemos nada
    catch(e) {
        console.log(e);
    }
    Suma();
 } 
 
 function mult14() {
    var mul36 = document.factura.mul36.value;
    var mul37 = document.factura.mul37.value;
 
   
    try{
       //Calculamos el número escrito:
       mul36 = (isNaN(parseInt(mul36)))? 0 : parseInt(mul36);
       mul37 = (isNaN(parseInt(mul37)))? 0 : parseInt(mul37);
 
        document.factura.ingreso14.value = mul36*mul37;
        
    }
    //Si se produce un error no hacemos nada
    catch(e) {
        console.log(e);
    }
    Suma();
 } 
 
 function mult15() {
    var mul38 = document.factura.mul38.value;
    var mul39 = document.factura.mul39.value;
 
   
    try{
       //Calculamos el número escrito:
       mul38 = (isNaN(parseInt(mul38)))? 0 : parseInt(mul38);
       mul39 = (isNaN(parseInt(mul39)))? 0 : parseInt(mul39);
 
        document.factura.ingreso15.value = mul38*mul39;
        
    }
    //Si se produce un error no hacemos nada
    catch(e) {
        console.log(e);
    }
    Suma();
 } 
 
 
 function mult16() {
    var mul40 = document.factura.mul40.value;
    var mul41 = document.factura.mul41.value;
 
   
    try{
       //Calculamos el número escrito:
       mul40 = (isNaN(parseInt(mul40)))? 0 : parseInt(mul40);
       mul41 = (isNaN(parseInt(mul41)))? 0 : parseInt(mul41);
 
        document.factura.ingreso16.value = mul40*mul41;
        
    }
    //Si se produce un error no hacemos nada
    catch(e) {
        console.log(e);
    }
    Suma();
 }















 function format(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
//Función que realiza la suma
function Suma() {
   var ingreso1 = document.factura.ingreso1.value;
   var ingreso2 = document.factura.ingreso2.value;


   var ingreso3 = document.factura.ingreso3.value;
   var ingreso4 = document.factura.ingreso4.value;
   var ingreso5 = document.factura.ingreso5.value;
   var ingreso6 = document.factura.ingreso6.value;
   var ingreso7 = document.factura.ingreso7.value;
   var ingreso8 = document.factura.ingreso8.value;
   var ingreso9 = document.factura.ingreso9.value;
   var ingreso10 = document.factura.ingreso10.value;


   var ingreso11 = document.factura.ingreso11.value;
   var ingreso12 = document.factura.ingreso12.value;
   var ingreso13 = document.factura.ingreso13.value;
   var ingreso14 = document.factura.ingreso14.value;
   var ingreso15 = document.factura.ingreso15.value;
   var ingreso16 = document.factura.ingreso16.value;


   try{
      //Calculamos el número escrito:
       ingreso1 = (isNaN(parseInt(ingreso1)))? 0 : parseInt(ingreso1);
       ingreso2 = (isNaN(parseInt(ingreso2)))? 0 : parseInt(ingreso2);

       ingreso3 = (isNaN(parseInt(ingreso3)))? 0 : parseInt(ingreso3);
       ingreso4 = (isNaN(parseInt(ingreso4)))? 0 : parseInt(ingreso4);
       ingreso5 = (isNaN(parseInt(ingreso5)))? 0 : parseInt(ingreso5);
       ingreso6 = (isNaN(parseInt(ingreso6)))? 0 : parseInt(ingreso6);
       ingreso7 = (isNaN(parseInt(ingreso7)))? 0 : parseInt(ingreso7);
       ingreso8 = (isNaN(parseInt(ingreso8)))? 0 : parseInt(ingreso8);
       ingreso9 = (isNaN(parseInt(ingreso9)))? 0 : parseInt(ingreso9);
       ingreso10 = (isNaN(parseInt(ingreso10)))? 0 : parseInt(ingreso10);


       ingreso11 = (isNaN(parseInt(ingreso11)))? 0 : parseInt(ingreso11);
       ingreso12 = (isNaN(parseInt(ingreso12)))? 0 : parseInt(ingreso12);
       ingreso13 = (isNaN(parseInt(ingreso13)))? 0 : parseInt(ingreso13);
       ingreso14 = (isNaN(parseInt(ingreso14)))? 0 : parseInt(ingreso14);
       ingreso15 = (isNaN(parseInt(ingreso15)))? 0 : parseInt(ingreso15);
       ingreso16 = (isNaN(parseInt(ingreso16)))? 0 : parseInt(ingreso16);

       var sum2 = ingreso1+ingreso2+ingreso3+ingreso4+ingreso5+ingreso6+ingreso7+ingreso8+ingreso9+ingreso10+ingreso11+ingreso12+ingreso13+ingreso14+ingreso15+ingreso16;
       var sumdef = format(sum2);
       document.factura.resultado.value = sumdef ;
   }
   //Si se produce un error no hacemos nada
   catch(e) {
       console.log(e);
   }
};

