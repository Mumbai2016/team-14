package com.atma.atma_14;

import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.widget.LinearLayout;
import android.widget.TextView;

import de.hdodenhof.circleimageview.CircleImageView;

public class NGOActivity extends AppCompatActivity {

    LinearLayout ProjectClick1,ProjectClick2,ProjectClick3,ProjectClick4;
    CircleImageView ProjectImage1,ProjectImage2,ProjectImage3,ProjectImage4;
    TextView ProjectTitle1,ProjectTitle2,ProjectTitle3,ProjectTitle4;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_ngo);
        setUpViews();
    }

    private void setUpViews() {
        ProjectClick1 = (LinearLayout) findViewById(R.id.NGOLayout1);
        ProjectClick2 = (LinearLayout) findViewById(R.id.NGOLayout2);
        ProjectClick3 = (LinearLayout) findViewById(R.id.NGOLayout3);
        ProjectClick4 = (LinearLayout) findViewById(R.id.NGOLayout4);

        ProjectImage1 = (CircleImageView) findViewById(R.id.NGOImage1);
        ProjectImage2 = (CircleImageView) findViewById(R.id.NGOImage2);
        ProjectImage3 = (CircleImageView) findViewById(R.id.NGOImage3);
        ProjectImage4 = (CircleImageView) findViewById(R.id.NGOImage4);

        ProjectTitle1 = (TextView) findViewById(R.id.NGOProjectName1);
        ProjectTitle2 = (TextView) findViewById(R.id.NGOProjectName2);
        ProjectTitle3 = (TextView) findViewById(R.id.NGOProjectName3);
        ProjectTitle4 = (TextView) findViewById(R.id.NGOProjectName4);
    }
}



