package com.atma.atma_14;

import android.os.Bundle;
import android.support.design.widget.FloatingActionButton;
import android.support.design.widget.TextInputEditText;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.Toolbar;
import android.view.View;
import android.widget.TextView;
import android.widget.Toast;

public class LoginActivity extends AppCompatActivity {

    FloatingActionButton nextFab;
    Toolbar toolbar;
    TextInputEditText edUsername,edPassword;
    TextView tvuserType;
    String userType;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);
        userType = getIntent().getStringExtra("UserType");
        toolbar = (Toolbar) findViewById(R.id.login_toolbar);
        setSupportActionBar(toolbar);
        getSupportActionBar().setDisplayHomeAsUpEnabled(true);
        getSupportActionBar().setTitle("Login As "+ userType);
        setupViews();
    }

    public void nextClick(View v){
        if (edUsername.getText().toString().isEmpty()){
            edUsername.setError("Username can't be Empty");
        }else
        if (edPassword.getText().toString().isEmpty()){
            edPassword.setError("Password can't be Empty");
        }else{
            String userName = edUsername.getText().toString();
            String password = edPassword.getText().toString();

            loginMethod(userName,password);
        }
    }

    private void loginMethod(String userName, String password) {
        if (userName.contains("atma") && password.contains("123456")){
            Toast.makeText(LoginActivity.this, "Login Successful", Toast.LENGTH_SHORT).show();
        }else{
            Toast.makeText(LoginActivity.this, "Invalid Login! Please Login Again", Toast.LENGTH_SHORT).show();
            edUsername.setText("");
            edPassword.setText("");
        }
    }

    private void setupViews() {
        edUsername = (TextInputEditText) findViewById(R.id.login_textinputedittext_username);
        edPassword = (TextInputEditText) findViewById(R.id.login_textinputedittext_password);
        tvuserType = (TextView) findViewById(R.id.login_textview);
        nextFab = (FloatingActionButton) findViewById(R.id.login_nextfab);
    }
}
