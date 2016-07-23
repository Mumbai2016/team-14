package com.atma.atma_14;

import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.LinearLayout;
import android.widget.TextView;

import de.hdodenhof.circleimageview.CircleImageView;

public class NGOActivity extends AppCompatActivity implements View.OnClickListener{

    LinearLayout ProjectClick1,ProjectClick2,ProjectClick3,ProjectClick4;
    CircleImageView ProjectImage1,ProjectImage2,ProjectImage3,ProjectImage4;
    TextView Title,Summary;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_ngo);
        setUpViews();

        ProjectClick1.setOnClickListener(this);
        ProjectClick2.setOnClickListener(this);
        ProjectClick3.setOnClickListener(this);
        ProjectClick4.setOnClickListener(this);

        Title.setText("Bread for the World");
        Summary.setText("Extremely impressed with the satisfaction and happiness I saw in the girls’ faces at ATMA Gurukulam. Even the people taking care of the girls appear committed to a noble cause. A great place and wish them the very best. Exceeded all my optimis");

        ProjectImage1.setImageResource(R.drawable.ngo5);
        
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

        Title = (TextView) findViewById(R.id.ngoname);
        Summary = (TextView) findViewById(R.id.ngosummary);
    }


    @Override
    public void onClick(View view) {
        switch (view.getId()){
            case R.id.NGOLayout1:
                break;
            case R.id.NGOLayout2:
                break;
            case R.id.NGOLayout3:
                break;
            case R.id.NGOLayout4:
                break;
        }
    }
}



