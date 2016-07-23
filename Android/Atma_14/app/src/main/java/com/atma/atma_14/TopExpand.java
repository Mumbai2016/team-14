package com.atma.atma_14;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.TextView;

import de.hdodenhof.circleimageview.CircleImageView;

public class TopExpand extends AppCompatActivity {

    String TopType;
    CircleImageView currentImage,currentProject1,currentProject2,currentProject3,currentProject4;
    TextView currentName,currentProjectTitle1,currentProjectTitle2,currentProjectTitle3,currentProjectTitle4;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_top_expand);
        TopType = getIntent().getStringExtra("TopType");
        setUpViews();
        switch (TopType){

        }
    }

    private void setUpViews() {
        currentImage = (CircleImageView) findViewById(R.id.current_image);
        currentProject1 = (CircleImageView) findViewById(R.id.)
    }
}
