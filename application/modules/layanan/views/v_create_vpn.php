<style type="text/css">
	  .card-header {
	background-color: #f8f9fc;
    padding: 10px;
    border-radius: 4px 4px 0px 0px;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05), 0 0 0 1px rgba(63, 63, 68, 0.1);
  }

  .card-title {
    color: #333;
    font-size: 18px;
    margin: 0;
  }
  .card.card-user {
    border-radius: 0px 0px 4px 4px !important;
}
</style>

<div class="row">
                    <div class="col-md-8">
                        <div class="card">                            
                            <div class="content">
                                <form>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Company (disabled)</label>
                                                <input type="text" class="form-control" disabled placeholder="Company" value="Creative Code Inc.">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control" placeholder="Username" value="michael23">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" placeholder="Company" value="Mike">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" placeholder="Last Name" value="Andrew">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" class="form-control" placeholder="City" value="Mike">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <input type="text" class="form-control" placeholder="Country" value="Andrew">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Postal Code</label>
                                                <input type="number" class="form-control" placeholder="ZIP Code">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>About Me</label>
                                                <textarea rows="5" class="form-control" placeholder="Here can be your description" value="Mike">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">          
                    <div class="card-header ">
								<h4 class="card-title">Horizontal Form</h4>
							</div>          	
                        <div class="card card-user">                      
                            <div class="image">
                                <img src="<?php echo base_url();?>assets/img/order.svg" alt="..."/>
                            </div>                           
                            <hr>

                            <ul class="list-group list-group-flush">
						        <li class="list-group-item">
						            <i class="fas fa-server"></i> Pilihan Server VPN: Silakan tentukan lokasi server dan harga yang Anda inginkan.
						        </li>
						        <li class="list-group-item">
						            <i class="fas fa-user"></i> Nama Pengguna: Mohon isi username untuk akun VPN Anda.
						        </li>
						        <li class="list-group-item">
						            <i class="fas fa-key"></i> Kata Sandi: Harap isi kata sandi untuk akun VPN Anda.
						        </li>
						        <li class="list-group-item">
						            <i class="fas fa-plug"></i> Port untuk Remote: Silakan masukkan port yang ingin Anda gunakan untuk remote, contohnya jika Anda ingin remote Winbox, isilah dengan port Winbox pada IP > Service.
						        </li>
						        <li class="list-group-item">
						            <i class="fas fa-sync-alt"></i> Perpanjangan Otomatis: Aktifkan opsi ini jika ingin VPN Anda diperpanjang secara otomatis. Pelajari Lebih Lanjut.
						        </li>
						    </ul>

						    <p>Pastikan untuk memeriksa kembali data yang Anda masukkan sebelum memesan VPN!</p>

                            <div class="text-center">
                                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                            </div>
                        </div>
                    </div>

                </div>