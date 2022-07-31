            <!-- APP CONTENT-->
            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <div class="main-container container-fluid">

                        <div class="page-header">
                            <h1 class="page-title">Usuarios</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?=$baseUrl?>">Inicio</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Administrar usuarios</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Usuarios</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title mb-0">
                                            <button type="button" class="btn btn-primary" data-bs-effect="effect-scale" data-bs-toggle="modal" data-bs-target="#modalAddUser">
                                                <i class="fe fe-user me-2"></i>
                                                Agregar usuario
                                            </button>
                                        </h3>
                                    </div>
                                    <div class="card-body pt-4">
                                        <table class="table table-bordered text-nowrap border-bottom table-striped dt-responsive" id="basic-datatable">
                                            <thead>
                                                <tr>
                                                    <th class="wd-15p border-bottom-0">#</th>
                                                    <th class="wd-15p border-bottom-0">Nombre</th>
                                                    <th class="wd-20p border-bottom-0">Usuario</th>
                                                    <th class="wd-15p border-bottom-0">Foto</th>
                                                    <th class="wd-10p border-bottom-0">Rol</th>
                                                    <th class="wd-25p border-bottom-0">Estado</th>
                                                    <th class="wd-25p border-bottom-0">Última sesión</th>
                                                    <th class="wd-25p border-bottom-0">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
												<?php foreach ($rows as $row):?>
												<tr>
													<td><?=$row->id?></td>
                                                    <td><?=$row->name?></td>
                                                    <td><?=$row->username?></td>
													<td class="text-center">
													<?php 
														if($row->photo != ''){
															echo '<img src="'.$row->photo.'" class="avatar bradius" width="20px">';
														}else{
															echo '<img src="'.$baseUrl.'assets/images/users/anonymous.png" class="avatar bradius" width="20px">';
														}
													?>
													</td>
													<td>
													<?php 
														if($row->role == 'admin'){
															echo "Administrador";
														}
														if($row->role == 'special'){
															echo "Especial";
														}
														if($row->role == 'seller'){
															echo "Vendedor";
														}
													?>
													</td>
													<td class="text-center">
														<div class="mt-sm-1 d-block">
														<?php 
															if($row->status == 1){
																echo '<span class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Activado</span>';
															}
															if($row->status == 0){
																echo '<span class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Desactivado</span>';
															}
														?>
                                                        </div>	
													</td>
													<td><?=$row->last_login?></td>
													<td>
														<div class="btn-list"> 
                                                            <button id="bEdit" type="button" class="btn btn-sm btn-primary" style="">
                                                                <span class="fe fe-edit"> </span>
                                                            </button>
                                                            <button id="bDel" type="button" class="btn  btn-sm btn-danger" style="">
                                                                <span class="fe fe-trash-2"> </span>
                                                            </button>
                                                        </div>
													</td>
												</tr>
												<?php endforeach?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- APP CONTENT-->
        
        <!-- LARGE MODAL -->
        <div class="modal fade" id="modalAddUser">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-content-demo">

                    <form method="post" action="<?=$baseUrl?>admin/users/" enctype="multipart/form-data">
                        
                        <div class="modal-header">
                            <h6 class="modal-title">Agregar usuario</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                        </div>
                        
                        <div class="modal-body">

                            <div class="response"></div>
                            
                            <div class="input-group w-100 p-2">
                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </a>
                                <input class="input100 border-start-0 form-control ms-0" type="text" placeholder="Ingresar el nombre" name="name" required>
                            </div>

                            <div class="input-group w-100 p-2">
                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                    <i class="fa fa-key" aria-hidden="true"></i>
                                </a>
                                <input class="input100 border-start-0 form-control ms-0" type="text" placeholder="Ingresar el nombre de usuario" name="username" required>
                            </div>

                            <div class="input-group w-100 p-2">
                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                    <i class="fa fa-lock" aria-hidden="true"></i>
                                </a>
                                <input class="input100 border-start-0 form-control ms-0" type="password" placeholder="Ingresar la contraseña" name="password" required>
                            </div>

                            <div class="form-group">
                                <div class="input-group w-100 p-2">
                                    <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                        <i class="fa fa-users" aria-hidden="true"></i>
                                    </a>
                                    <select class="form-control input-lg" name="role" required>
                                        <option value="">Seleccionar el perfil</option>
                                        <option value="admin">Administrador</option>
                                        <option value="special">Especial</option>
                                        <option value="seller">Vendedor</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="photo" class="form-label mt-0">Seleccionar foto</label>
                                <input class="form-control" type="file" id="photo" name="photo">
                                <div class="d-flex align-items-center justify-content-around">
                                <span class="badge text-info mt-2">Tamaño máximo: 3MB</span>
                                <img src="<?=$baseUrl?>assets/images/users/anonymous.png" class="img-thumbnail mt-2 img" width="100px">
                                </div>
                            </div>

                        </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button> 
                        </div>
                    
                    </form>
                </div>
            </div>
        </div>


