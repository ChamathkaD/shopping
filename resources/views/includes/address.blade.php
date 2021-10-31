<x-app-layout>

    <section class="pt-20  pb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
        <div class="col-md-12">
            <div class="tab-content dashboard-content">
                <div class="card">
                    <div class="card-header">
                        <h5>Add New Address</h5>
                    </div>
                    <div class="card-body">

                        <form method="post" name="enq">
                            <div class="row">
                                <div class="form-group col-md-6">
                                   <div>
                                       <label>Province <span class="required">*</span></label>
                                       <input required="" class="form-control square" name="province" type="text">
                                   </div>

                                    <div>
                                        <label>District <span class="required">*</span></label>
                                        <input required="" class="form-control square" name="district">
                                    </div>

                                    <div>
                                        <label>City <span class="required">*</span></label>
                                        <input required="" class="form-control square" name="city" type="text">
                                    </div>
                                    <div>
                                        <label>Address <span class="required">*</span></label>
                                        <input required="" class="form-control square" name="address" type="text" placeholder="Foe Example:no29,bop400,pulasthigama,plonnaruwa">
                                    </div>

                                </div>


                                <div class="form-group col-md-6">

                                    <div>
                                        <label>Full name <span class="required">*</span></label>
                                        <input required="" class="form-control square" name="full_name" type="text">
                                    </div>
                                    <div>
                                        <label>Phone<span class="required">*</span></label>
                                        <input required="" class="form-control square" name="phone" type="text">
                                    </div>
                                </div>




                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-fill-out submit" name="submit" value="Submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
            </div>
        </div>
    </section>


</x-app-layout>
