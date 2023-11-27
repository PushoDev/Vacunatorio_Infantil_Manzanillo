<?php

namespace App\Controllers;

//Modelos a utilizar
use App\Models\Usuarios;
use App\Models\Vacunas;
use App\Models\Infantil;
use App\Models\Listado_Infantil;
use App\Models\Listado_Vacuna;
use PhpParser\Node\Stmt\Return_;

class Home extends BaseController
{
    public function index(): string
    {
        $mensaje = session('mensaje');
        return view('Login', ["mensaje" => $mensaje]);
    }

    public function login()
    {
        $usuario = $this->request->getPost('usuario');
        $password = $this->request->getPost('password');

        $Usuario = new Usuarios();

        $datosUsuario = $Usuario->obtenerUsuario(['usuario' => $usuario]);

        if (count($datosUsuario) > 0 && password_verify("$password" , $datosUsuario[0]['password'])) {
            $data = [
                "usuario" => $datosUsuario[0]['usuario'],
                "type" => $datosUsuario[0]['type']
            ];

            $session = session();
            $session->set($data);

            return redirect()->to(base_url('/admin'))->with('mensaje', '1');
        } else {
            return redirect()->to(base_url('/'))->with('mensaje', '0');
        }
    }

    
    public function home_admin()
    {
    // Obtener Cantidad de Vacunas
    $modelVacunas = new Vacunas();
    $CantidaddeVacunas = $modelVacunas->obtenerCantidaddeVacunas();
    
    // Obtener Cantidad de Infantiles Registrados
    $modelInfantil = new Infantil();
    $CantidadInfantiles = $modelInfantil->obtenerCantidaddeinfantes();
    
    return view('admin/home_admin', [
        'CantidadVacunas' => $CantidaddeVacunas,
        'CantidadInfantil' => $CantidadInfantiles
    ]);
    }


    // --------------------------------------------
    #INFANTILES
    //Lista Infantil
    public function infantil_list()
    {
        $crud = new Listado_Infantil();
        $datos = $crud -> listarInfantile();

        $data = [
            "datos" => $datos
        ];

        return view('admin/infantil_list', $data);
    }
    //Agregar Infantil
    public function infantil_new()
    {
        $mensaje = session('mensaje');
        return view('admin/infantil_new', ["mensaje" => $mensaje]);
    }
    // Funcion para agregar Infante
    public function nuevo_infante()
    {
        $nuevoinfante = [
            "nombre" => $_POST['nombre'],
            "edad" => $_POST['edad'],
            "c_identidad" => $_POST['c_identidad'],
            "cmf" => $_POST['cmf'],
            "dir_particular" => $_POST['dir_particular']            
        ];

        $crud = new Listado_Infantil();
        $respuestanuevoinfantil = $crud ->insertarinfantil($nuevoinfante);

        if ($respuestanuevoinfantil > 0) {
            return redirect() -> to(base_url('/infantil_list'));
        } else {
            return redirect() ->to(base_url('/infantil_new'));
        }
    }
    //Buscar Infantil
    public function infantil_search()
    {
        return view('admin/infantil_search');
    }

    // Obtener Infantil    
    public function infantil_update($id_infante)
    {
        $data = ["id_infante" => $id_infante];
        $crud = new Listado_Infantil();
        $respuestanuevoinfantil = $crud->obtenerinfantil($data);
        
        // Verificar si los datos se obtuvieron
        if (!empty($respuestanuevoinfantil)) {
            $datos = ["datos" => $respuestanuevoinfantil];
        } else {
            $datos = ["datos" => []];
        }
        return view('admin/infantil_update', $datos);
    }

    // Actualizar Infantiles
    public function actualizarinfantil()
    {
        $actualizarinfantil = [
            "nombre" => $_POST['nombre'],
            "edad" => $_POST['edad'],
            "c_identidad" => $_POST['c_identidad'],
            "cmf" => $_POST['cmf'],
            "dir_particular" => $_POST['dir_particular']             
        ];

        $id_infante = $_POST['id_infante'];

        $crud = new Listado_Infantil();

        $respustaactualizarinfantil = $crud->actualizarinfantil($actualizarinfantil, $id_infante);

        if ($respustaactualizarinfantil) {
            return redirect() -> to(base_url('/infantil_list'));
        } else {
            return redirect() -> to(base_url('/infantil_list'));
        }
    }

    // Eliminar Infantil
    public function eliminarinfantil($id_infante)
    {
        $crud = new Listado_Infantil();
        $data = ["id_infante" => $id_infante];

        $respuestaeliminarinfante = $crud->eliminarinfantil($id_infante);

        if ($respuestaeliminarinfante) {
            return redirect() ->to(base_url('/infantil_list'));
        } else {
            return redirect() -> to(base_url('/infantil_list'));
        }
    }


    // --------------------------------------------
    #VACUNAS \\
    //Lista Vacunas
    public function vacunas_list()
    {
        $vac = new Listado_Vacuna();
        $esqvac = $vac -> listarVacunas();

        $datos_vacunas = [
            "esqvac" => $esqvac
        ];
        return view('admin/vacunas_list', $datos_vacunas);
    }


    // Agregar Vacuna
public function vacunas_new()
{
    $mensaje = session('mensaje');
    $imagen_url = session('imagen_url'); // Agregar esta línea
    return view('admin/vacunas_new', ["mensaje" => $mensaje, "imagen_url" => $imagen_url]);
}

// Función para agregar vacuna
public function nueva_vacuna()
{
    $imagen_vac = $this->request->getFile('imagen_vac');
    $nuevonombreimg = "";

    if ($imagen_vac !== null && $imagen_vac->isValid() && !$imagen_vac->hasMoved()) {
        $nuevonombreimg = $imagen_vac->getRandomName();
        $imagen_vac->move('./public/database/uploads/', $nuevonombreimg);
    }

    $nuevavacuna = [
        "vacuna" => $this->request->getPost('vacuna'),
        "1ra_dosis" => $this->request->getPost('1ra_dosis'),
        "2da_dosis" => $this->request->getPost('2da_dosis'),
        "3ra_dosis" => $this->request->getPost('3ra_dosis'),
        "reactivacion" => $this->request->getPost('reactivacion'),
        "dosis_ml" => $this->request->getPost('dosis_ml'),
        "via" => $this->request->getPost('via'),
        "region_aplicacion" => $this->request->getPost('region_aplicacion'),
        "lugar_aplicacion" => $this->request->getPost('lugar_aplicacion'),
        "resumen" => $this->request->getPost('resumen'),
        "imagen_vac" => $nuevonombreimg
    ];

    // Agregar esta sección para definir $imagen_url
    if ($nuevonombreimg) {
        $imagen_url = base_url('public/database/uploads/' . $nuevonombreimg);
    } else {
        $imagen_url = null;
    }

    $vac = new Listado_Vacuna();
    $respuestanuevavac = $vac->insertarvacuna($nuevavacuna);

    if ($respuestanuevavac > 0) {
        return redirect()->to(base_url('/vacunas_list'))->with('mensaje', '1');
    } else {
        return redirect()->to(base_url('/vacunas_new'))->with('mensaje', '0');
    }
}

 



    //Buscar Vacunas
    public function vacunas_search()
    {
        return view('admin/vacunas_search');
    }
    
    //Obtener Vacuna
    public function vacunas_update($id_vac)
    {
        $data = ["id_vac" => $id_vac];
        $vac = new Listado_Vacuna();
        $respuestanuevavac = $vac->obtenervacuna($data);

        // Verificar si los datos se obtuvieron correctamente
        if (!empty($respuestanuevavac)) {
            $datos = ["datos" => $respuestanuevavac];
            } else {
                $datos = ["datos" => []]; // Pasar un arreglo vacío si no se obtuvieron datos
                }

                return view('admin/vacunas_update', $datos);                
                
    }

    // Actualizar vacuna por formulario
public function actualizarvac()
{
    $actualizarvacuna = [
        "vacuna" => $this->request->getPost('vacuna'),
        "1ra_dosis" => $this->request->getPost('1ra_dosis'),
        "2da_dosis" => $this->request->getPost('2da_dosis'),
        "3ra_dosis" => $this->request->getPost('3ra_dosis'),
        "reactivacion" => $this->request->getPost('reactivacion'),
        "dosis_ml" => $this->request->getPost('dosis_ml'),
        "via" => $this->request->getPost('via'),
        "region_aplicacion" => $this->request->getPost('region_aplicacion'),
        "lugar_aplicacion" => $this->request->getPost('lugar_aplicacion'),
        "resumen" => $this->request->getPost('resumen')
    ];

    $id_vac = $this->request->getPost('id_vac');

    $imagen_vac = $this->request->getFile('imagen_vac');
    $nuevonombreimg = $this->request->getPost('imagen_vac_actual'); // Obtenemos el nombre actual de la imagen

    if ($imagen_vac !== null && $imagen_vac->isValid() && !$imagen_vac->hasMoved()) {
        $nuevonombreimg = $imagen_vac->getRandomName();
        $imagen_vac->move('./public/database/uploads/', $nuevonombreimg);
    }

    $actualizarvacuna['imagen_vac'] = $nuevonombreimg; // Actualizamos el nombre de la imagen si se cargó una nueva

    $vac = new Listado_Vacuna();

    $respuestaactualizarvacuna = $vac->actualizarvacunas($actualizarvacuna, $id_vac);

    if ($respuestaactualizarvacuna) {
        return redirect()->to(base_url('/vacunas_list'));
    } else {
        return redirect()->to(base_url('/vacunas_list'));
    }
}


    //Eliminar vacuna
    public function eliminarvacuna($id_vac)
    {
        $vac = new Listado_Vacuna();
        $data = ["id_vac" => $id_vac];

        $respuestaeliminarvacuna = $vac ->eliminarvacuna($data);

        if ($respuestaeliminarvacuna) {
            return redirect() -> to(base_url('/vacunas_list'));
        } else {
            return redirect() -> to(base_url('/vacunas_list'));
        }
    }





    #Entidad Laboral
    public function entidad()
    {
        return view('admin/entidad');
    }

    #Salida del proyecto
    public function salir()
    {
        $session = session();
        $session -> destroy();
        return redirect() -> to(base_url('/'));
    }
}
