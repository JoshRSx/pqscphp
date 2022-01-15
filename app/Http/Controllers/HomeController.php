<?php

namespace App\Http\Controllers;   //definir lugar del archivo

use Illuminate\Http\Request;      

class HomeController extends Controller
{


    //Metodo para administrar rutas

    public function inicio(){
        return view('index') ;    
    }

    public function elcom(){
        return view('News.elcomercio') ;    
    }
    public function gest(){
        return view('News.gestion') ;    
    }
    public function peru21(){

        return view('News.peru21');

    }
    public function ojo(){

        return view('News.ojo');

    }
    public function correo(){

        return view('News.correo');
    }
    public function trome(){

        return view('News.trome');
    }
    public function depor(){

        return view('News.depor');
    }

//Regional

public function correoArequipa(){

    return view('Regional.CorreoArequipa');
}

public function correoAyacucho(){

    return view('Regional.CorreoAyacucho');
}
public function correoChimbote(){

    return view('Regional.CorreoChimbote');
}
public function correoHuancavelica(){

    return view('Regional.CorreoHuancavelica');
}
public function correoHuanuco(){

    return view('Regional.CorreoHuanuco');
}
public function correoIca(){

    return view('Regional.CorreoIca');
}
public function correoLaLibertad(){

    return view('Regional.CorreoLaLibertad');
}
public function correoLambayeque(){

    return view('Regional.CorreoLambayeque');
}
public function correoPiura(){

    return view('Regional.CorreoPiura');
}
public function correoPuno(){

    return view('Regional.CorreoPuno');
}
public function correoTacna(){

    return view('Regional.CorreoTacna');
}
public function correoTumbes(){

    return view('Regional.CorreoTumbes');
}


public function deporCentro(){

    return view('Regional.DeporCentro');
}

public function deporNorte(){

    return view('Regional.DeporNorte');
}

public function deporSur(){

    return view('Regional.DeporSur');
}


public function ojoCentro(){

    return view('Regional.OjoCentro');
}

public function ojoNorte(){

    return view('Regional.OjoNorte');
}

public function ojoSur(){

    return view('Regional.OjoSur');
}


    /*Sub ventanas */
    /*public function show($curso){
       return view('cursos.show', compact(‘Curso’));
    }
 */

}
?>