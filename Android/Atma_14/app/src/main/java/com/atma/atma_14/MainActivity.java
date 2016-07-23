package com.atma.atma_14;

import android.content.Intent;
import android.os.Bundle;
import android.support.design.widget.FloatingActionButton;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.Toolbar;
import android.view.View;
import android.widget.RadioButton;
import android.widget.RadioGroup;

public class MainActivity extends AppCompatActivity {


    RadioGroup userTypeGroup;
    RadioButton radioVolunteer,radioNGO,radioProjectManager;
    FloatingActionButton fabNext;
    Toolbar toolbar;
    String selectedLoginType;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        toolbar = (Toolbar) findViewById(R.id.login_as_toolbar);
        setSupportActionBar(toolbar);
        getSupportActionBar().setDisplayHomeAsUpEnabled(true);
        setupViews();
    }

    public void nextClick(View v){
        int checkRadio = userTypeGroup.getCheckedRadioButtonId();
        switch (checkRadio){
            case R.id.login_as_radiobutton_ngo:
                selectedLoginType = "NGO";
                break;
            case R.id.login_as_radiobutton_partnership_manager:
                selectedLoginType = "Partnership Manager";
                break;
        }

        Intent i = new Intent(this,LoginActivity.class);
        i.putExtra("UserType",selectedLoginType);
        startActivity(i);
    }

    private void setupViews() {
        userTypeGroup = (RadioGroup) findViewById(R.id.login_as_radiogroup);
        radioNGO = (RadioButton) findViewById(R.id.login_as_radiobutton_ngo);
        radioProjectManager = (RadioButton) findViewById(R.id.login_as_radiobutton_partnership_manager);
        fabNext = (FloatingActionButton) findViewById(R.id.login_as_nextfab);
    }
}
