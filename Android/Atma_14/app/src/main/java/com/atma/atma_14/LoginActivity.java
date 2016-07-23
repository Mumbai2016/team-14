package com.atma.atma_14;

import android.os.AsyncTask;
import android.os.Bundle;
import android.support.design.widget.FloatingActionButton;
import android.support.design.widget.TextInputEditText;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.Toolbar;
import android.util.Log;
import android.view.View;
import android.widget.TextView;
import android.widget.Toast;

import java.io.BufferedInputStream;
import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.URL;

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
     /*   if (userName.contains("atma") && password.contains("123456")){
            Toast.makeText(LoginActivity.this, "Login Successful", Toast.LENGTH_SHORT).show();
        }else{
            Toast.makeText(LoginActivity.this, "Invalid Login! Please Login Again", Toast.LENGTH_SHORT).show();
            edUsername.setText("");
            edPassword.setText("");
        } */

        new AsyncHttpTask().execute("http://ec2-54-169-134-50.ap-southeast-1.compute.amazonaws.com/loginandroid.php?username="+userName+"&password="+password);

    }

    private void setupViews() {
        edUsername = (TextInputEditText) findViewById(R.id.login_textinputedittext_username);
        edPassword = (TextInputEditText) findViewById(R.id.login_textinputedittext_password);
        tvuserType = (TextView) findViewById(R.id.login_textview);
        nextFab = (FloatingActionButton) findViewById(R.id.login_nextfab);
    }

    public class AsyncHttpTask extends AsyncTask<String, Void, Integer> {

        @Override
        protected Integer doInBackground(String... params) {
            InputStream inputStream = null;
            HttpURLConnection urlConnection = null;
            Integer result = 0;
            try {
                /* forming th java.net.URL object */
                URL url = new URL(params[0]);
                urlConnection = (HttpURLConnection) url.openConnection();

                 /* optional request header */
                urlConnection.setRequestProperty("Content-Type", "application/json");

                /* optional request header */
                urlConnection.setRequestProperty("Accept", "application/json");

                /* for Get request */
                urlConnection.setRequestMethod("GET");
                int statusCode = urlConnection.getResponseCode();

                /* 200 represents HTTP OK */
                if (statusCode ==  200) {
                    inputStream = new BufferedInputStream(urlConnection.getInputStream());
                    String response = convertInputStreamToString(inputStream);
                    parseResult(response);
                    result = 1; // Successful
                }else{
                    result = 0; //"Failed to fetch data!";
                }
            } catch (Exception e) {
                Log.d("Exception", e.getLocalizedMessage());
            }
            return result; //"Failed to fetch data!";
        }

        @Override
        protected void onPostExecute(Integer result) {

        }
    }


    private String convertInputStreamToString(InputStream inputStream) throws IOException {
        BufferedReader bufferedReader = new BufferedReader( new InputStreamReader(inputStream));
        String line = "";
        String result = "";
        while((line = bufferedReader.readLine()) != null){
            result += line;
        }

            /* Close Stream */
        if(null!=inputStream){
            inputStream.close();
        }
        return result;
    }


    private void parseResult(String result) {
        if (result == "true"){
            Toast.makeText(LoginActivity.this, "Successful", Toast.LENGTH_SHORT).show();
        }else{
            Toast.makeText(LoginActivity.this, "Invalid Login", Toast.LENGTH_SHORT).show();
        }
    }


}
