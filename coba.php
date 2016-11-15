<<<<<<< HEAD
 <div class="col s6 push-s3 center z-depth-5 ">
    <%= form_tag sessions_path do %>
      <div>
      <h3>Login</h3>
    </div> 

    <% if @user.errors.any? %>
    <div class="error_messages">
      <h2>Form is invalid</h2>
      <ul>
        <% for message in @user.errors.full_messages %>
          <li><%= message %></li>
        <% end %>
      </ul>
    </div>
  <% end %>

      <div class="row">  
        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
            <%= text_field_tag :username %>
        </div>
      </div>
      <div class="row">
          <div class="input-field col s12 ">
            <i class="material-icons prefix">visibility</i>
           <%= password_field_tag :password %>
          </div>
      </div>

      <div class="row">
          <div class="input-field col s12 ">
            <i class="material-icons prefix">visibility</i>
           <%= password_field_tag :password_confirmation %>
          </div>
      </div>

    <div class="row">
      <div class="input-field col s12 ">
        <p class="right-align"><button class="btn btn-small waves-effect waves-light" type="actions" name="submit"><%= f.submit %></button></p>
      </div>
    </div>
    <%end%>
    </div>
=======
 <div class="col s6 push-s3 center z-depth-5 ">
    <%= form_tag sessions_path do %>
      <div>
      <h3>Login</h3>
    </div> 

    <% if @user.errors.any? %>
    <div class="error_messages">
      <h2>Form is invalid</h2>
      <ul>
        <% for message in @user.errors.full_messages %>
          <li><%= message %></li>
        <% end %>
      </ul>
    </div>
  <% end %>

      <div class="row">  
        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
            <%= text_field_tag :username %>
        </div>
      </div>
      <div class="row">
          <div class="input-field col s12 ">
            <i class="material-icons prefix">visibility</i>
           <%= password_field_tag :password %>
          </div>
      </div>

      <div class="row">
          <div class="input-field col s12 ">
            <i class="material-icons prefix">visibility</i>
           <%= password_field_tag :password_confirmation %>
          </div>
      </div>

    <div class="row">
      <div class="input-field col s12 ">
        <p class="right-align"><button class="btn btn-small waves-effect waves-light" type="actions" name="submit"><%= f.submit %></button></p>
      </div>
    </div>
    <%end%>
    </div>
>>>>>>> 7f4fce7b37187f55f366815cc5dd536542c1d7b4
    