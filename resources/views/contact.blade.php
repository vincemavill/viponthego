  <div class="b-row black-bg" id="contact_row">
            <div class=" b-vh">
                <div class="container row-pad">
                    <div class="col-md-5">
                        <div class="col-lg-12 cont-inf-pad">
                            <div>
                                <h3 class="white-c rale-f cont-inf">CONTACT INFO</h3>
                            </div>
                            <div clas="col-lg-12">
                                <table class="cont-inf-tbl">
                                 <!--    <tr>
                                      <td><i class="contact-icon fa fa-map-marker gold-c fa-2x"></i></td>
                                      <td><h5 class="contact-f open-f white-c fw-300">711 Sample St. Cecilia ChapmanMankato Mississippi </h5></td>
                                    </tr> -->
                                    <tr>
                                      <td><i class="contact-icon fa fa fa-phone gold-c fa-2x"></i></td>
                                      <td><h5 class="contact-f open-f white-c fw-300">1-877-861-4422</h5></td>
                                    </tr>
                                    <tr>
                                      <td><i class="contact-icon fa fa-envelope gold-c fa-2x"></i></td>
                                      <td><h5 class="contact-f open-f white-c fw-300">info@viponthego.com</h5></td>
                                    </tr>
                                </table>
                            </div>
                            <div clas="col-lg-12">
                                <div class="center-block text-center">
                                    <table class="ss-media">
                                        <tr>
                                          <td colspan="3"> <h3 class="white-c rale-f text-center">FOLLOW US</h3></td>
                                        </tr>   
                                        <tr>
                                          <td><i class="fcb fa fa-facebook-official gold-c fa-3x"></i></td>
                                          <td><i class="twi fa fa-twitter-square gold-c fa-3x"></i></td>
                                          <td><i class="ins fa fa-instagram gold-c fa-3x"></i></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="col-lg-12">
                                <div class="col-lg-12">
                                    <div class="row">
                                    <h3 class="white-c rale-f send-mes">SEND US A MESSAGE</h3>
                                    </div>
                                </div>
                            <form id="vip_inquiry">
                                <br>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                
                                <div class="form-group">
                                    <label><h5 class="contact-f open-f gold-c fw-300 mess-pm">Full Name</h5></label>
                                    <input type="text" class="form-control input-sm cust-input" id="fullname" name="fullname" required>
                                </div>
                                <div class="form-group">
                                    <label><h5 class="contact-f open-f gold-c fw-300 mess-pm">Email</h5></label>
                                    <input type="email" class="form-control input-sm cust-input" id="email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label><h5 class="contact-f open-f gold-c fw-300 mess-pm">Contact Number</h5></label>
                                    <input type="text" class="form-control input-sm cust-input" id="contactno" name="contactno" required>
                                </div>
                                <div class="form-group">
                                    <label><h5 class="contact-f open-f gold-c fw-300 mess-pm">Message</h5></label>
                                    <textarea class="form-control input-sm cust-input" type="text" id="message" name="message" rows="4" required></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-cust pull-right rale-f">SEND MESSAGE</button>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>



<div class="loader"></div>