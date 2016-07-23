package com.atma.atma_14;

import android.content.Intent;
import android.graphics.Typeface;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.LinearLayout;
import android.widget.TextView;

import de.hdodenhof.circleimageview.CircleImageView;

public class Dashboard extends AppCompatActivity implements View.OnClickListener{

    TextView title,summary,titlePerformance,textVolunteer,textNGO,textPartnerManager;
    Typeface OpenSansRegular;
    CircleImageView topVolunteer,topNGO,topPartnerManager;
    Button login;
    LinearLayout topVolunteerClick,topNGOClick,topPartnerManagerClick;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_dashboard);
        setupFonts();
        setupViews();
        linkFonts();

        login.setOnClickListener(this);
        topNGOClick.setOnClickListener(this);
        topPartnerManagerClick.setOnClickListener(this);
        topVolunteerClick.setOnClickListener(this);
    }

    private void linkFonts() {
        title.setTypeface(OpenSansRegular);
        summary.setTypeface(OpenSansRegular);
        titlePerformance.setTypeface(OpenSansRegular);
    }

    private void setupFonts() {
        OpenSansRegular = Typeface.createFromAsset(getAssets(),"OpenSansRegular.ttf");
    }

    private void setupViews() {
        title = (TextView) findViewById(R.id.dashboard_titlename);
        summary = (TextView) findViewById(R.id.dashboard_titlesummary);
        titlePerformance = (TextView) findViewById(R.id.dashboard_titletopperformers);
        login = (Button) findViewById(R.id.dashboard_loginbutton);
        topVolunteer = (CircleImageView) findViewById(R.id.topvalunteer_imageview);
        topVolunteerClick = (LinearLayout) findViewById(R.id.topvalunteer_layout);
        textVolunteer = (TextView) findViewById(R.id.topvalunteer_textview);
        topNGO = (CircleImageView) findViewById(R.id.topngo_image);
        topNGOClick = (LinearLayout) findViewById(R.id.topngo_layout);
        textNGO = (TextView) findViewById(R.id.topngo_textview);
        topPartnerManager = (CircleImageView) findViewById(R.id.topngo_image);
        topPartnerManagerClick = (LinearLayout) findViewById(R.id.toppartnermanager_layout);
        textPartnerManager = (TextView) findViewById(R.id.toppartnermanager_textview);
    }

    @Override
    public void onClick(View view) {
        switch (view.getId()){
            case R.id.dashboard_loginbutton:
                startActivity(new Intent(this,MainActivity.class));
                break;
            case R.id.topvalunteer_layout:
                break;
            case R.id.toppartnermanager_layout:
                break;
            case R.id.topngo_layout:
                break;
        }
    }
}
