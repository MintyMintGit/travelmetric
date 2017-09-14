


<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form class="form-horizontal form-bordered" id="anketa" action="<?php echo site_url('home/saveNotKnows')?>">

                <div class="form-group">
                    <label class="col-md-3 control-label">Sex</label>
                    <div class="col-md-9">
                        <div class="radio">
                            <label>
                                <input type="radio" name="sex" value="male" checked="">
                                Male
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="sex" value="female">
                                Female
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">Range Datepicker</label>
                    <div class="col-md-8">
                        <div class="input-group input-daterange">
                            <input type="text" name="daterange" value="" />
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Age</label>
                    <div class="col-md-9">
                        <input type="number" class="form-control" placeholder="age" name="age">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Email</label>
                    <div class="col-md-9">
                        <input type="email" class="form-control" placeholder="email">
                    </div>
                </div>

                <button type="submit" class="btn btn-sm btn-success">Submit Button</button>
            </form>
        </div>
    </div>

</div>
