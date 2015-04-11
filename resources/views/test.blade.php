<!DOCTYPE html>
<html lang="en">
<head>



</head>
<body>


<style type="text/css">
/*@container_width: 600px;


@form_background: #fff;
@form_border: #e5e5e5;
@link_color: #009ddc;
@button_color: #eb5635;*/

.font-smoothing() {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.container_form {
  width: 980px;
  margin: 80px auto;
  header {
    text-align: center;
    h2 {
      color: #333;
      font-size: 22px;
      font-weight: 300;
      line-height: 24px;
      margin: 0 0 15px;
      padding: 0;
    }
    p {
      color: #666;
      margin: 0 0 35px;
    }
  }
  footer {
    width: 100%;
    padding: 15px 40px;
    margin: 0 0 -40px -40px;
    color: #666;
    font-size: 12px;
    text-align: center;
    a {
      color: #333;
      text-decoration: none;
    }
    .fa {
      color: #e74c3c;
    }
  }
}

/* Magic Starts here */

.form_andy {
  background: @form_background;
  border: 1px solid @form_border;
  border-radius: 5px;
  &:before,
  &:after {
    content: '';
    display: block;
    clear: both;
  }
  .field {
    width: 50%;
    padding: 20px 20px 5px;
    border-bottom: 1px solid @form_border;
    box-sizing: border-box;
    float: left;
    transition: 0.3s linear;
    &:nth-child(2n) {
    	border-left: 1px solid @form_border;
    }
    label {
      color: #a1a1a1;
      font-size: 12px;
      font-weight: 600;
      text-transform: uppercase;
    }
    input {
      outline: none;
      background: none;
      width: 100%;
      border: 0;
      padding: 5px 0;
      color: #666;
      font-family: 'proxima-nova';
      font-size: 16px;
      font-weight: 600;
      .font-smoothing;
    	transition: 0.3s linear;
    }
  }
  .checkbox {
    display: block;
    clear: both;
    text-align: center;
    margin-bottom: 25px;
    padding-top: 30px;
    color: #a1a1a1;
    font-family: 'proxima-nova';
    font-size: 12px;
    font-weight: 600;
    .font-smoothing;
    a {
      color: @link_color;
      text-decoration: none;
    }
  }
  input[type="checkbox"] label {
    background: #000;
    height: 30px;
    border: none;
  }
  button {
    cursor: pointer;
    display: block;
    background: @button_color;
    width: 180px;
    margin: 0 auto;
    margin-bottom: 40px;
    padding: 16px 0;
    border: none;
    border-radius: 100px;
    color: #fff;
    font-family: 'proxima-nova';
    font-size: 16px;
    font-weight: 600;
    text-transform: uppercase;
    .font-smoothing;
    transition: 0.2s linear;
    &:hover {
      background: lighten(@button_color, 10%);
    }
  }
}
</style>




<div class="container_form">
	<div class="form_andy">
    <form>
      <div class="field">
        <label for="username">Username</label>
        <input id="username" name="username" type="text" value="Andy Tran">
      </div>
      <div class="field">
        <label for="email">Email Address</label>
        <input id="email" name="email" type="email" value="hello@andytran.me">
      </div>
      <div class="field">
        <label for="password">Password</label>
        <input id="password" name="password" type="password" value="password">
      </div>
      <div class="field">
        <label for="rpassword">Repeat Password</label>
        <input id="rpassword" name="rpassword" type="password" value="password">
      </div>
      <div class="checkbox">
        <input id="checkbox" name="checkbox" type="checkbox">
        <label for="checkbox">
          By signing up, you agree with the
          <a href="#">terms and conditions</a>
        </label>
      </div>
      <button>Sign Up</button>
    </form>
  </div>
</div>





</body>
</html>