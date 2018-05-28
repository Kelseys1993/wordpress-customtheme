
<div class="container">
  <div class='row'>
    <div class="col text-center">
    <h2>Donate</h2>
    </div>
  </div>
<div class="row form-row">
  <div class="col">
  <form  method="POST" action="donations/success" class="clearfix">
    <input type="hidden" name="donate" value="1" />

    
      <div class="col-sm-6 amounts" data-toggle="buttons">
        <div class="row">
          <div class="col-xs-12 col-lg-4 btn-group">
            <label class="btn btn-secondary btn-lg btn-block">
              <input type="radio" name="amount" value="10" checked> $10
            </label>
          </div>

          <div class="col-xs-12 col-lg-4 btn-group">
            <label class="btn btn-secondary btn-lg btn-block">
              <input type="radio" name="amount" value="20"> $20
            </label>
          </div>

          <div class="col-xs-12 col-lg-4 btn-group">
            <label class="btn btn-secondary btn-lg btn-block">
              <input type="radio" name="amount" value="30"> $30
            </label>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-lg-4 btn-group">
            <label class="btn btn-secondary btn-lg btn-block">
              <input type="radio" name="amount" value="50"> $50
            </label>
          </div>

          <div class="col-xs-12 col-lg-4 btn-group">
            <label class="btn btn-secondary btn-lg btn-block">
              <input type="radio" name="amount" value="75"> $75
            </label>
          </div>

          <div class="col-xs-12 col-lg-4 btn-group">
            <label class="btn btn-secondary btn-lg btn-block">
              <input type="radio" name="amount" value="100"> $100
            </label>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-lg-4 btn-group">
            <label class="btn btn-secondary btn-lg btn-block">
              <input type="radio" name="amount" value="150"> $150
            </label>
          </div>

          <div class="col-xs-12 col-lg-4 btn-group">
            <label class="btn btn-secondary btn-lg btn-block">
              <input type="radio" name="amount" value="500"> $500
            </label>
          </div>

          <div class="col-xs-12 col-lg-4 btn-group">
            <label class="btn btn-secondary btn-lg btn-block">
              <input type="radio" name="amount" value="1000"> $1,000
            </label>
          </div>
        </div>
      </div>
      <div class="col-sm-6 ">
        <div class="row">
          <div class="col-xs-12">
            <div class="form-group">
              <label>Name <span>*</span></label>
              <input type="text" name="name" class="form-control" placeholder="Name" required>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label>Email address <span>*</span></label>
              <input type="email" name="email" class="form-control" placeholder="Email address" required>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              <label>Phone number</label>
              <input type="text" name="phone" class="form-control" placeholder="Phone number">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12">
            <div class="form-group">
              <label>Card number <span>*</span></label>
              <input type="text" name="card_number" class="form-control" placeholder="Card number" required>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label>Card CVV <span>*</span></label>
              <input type="text" name="card_cvv" class="form-control" placeholder="Card CVV" required>
            </div>
          </div>

          <div class="col-sm-6">
            <label>Card expiry <span>*</span></label>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <select name="card_expiry_day" class="form-control">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                      </select>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="form-group">
                  <select name="card_expiry_month" class="form-control">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                      </select>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="text-right">
          <button class="btn btn-primary">Make Donation</button>
        </div>
     </div>
  </form>

  </div> <!-- col -->
</div><!--  row -->
  </div><!--  container -->