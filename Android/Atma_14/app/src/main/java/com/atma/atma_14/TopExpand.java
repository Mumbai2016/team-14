package com.atma.atma_14;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;

public class TopExpand extends AppCompatActivity {

    String TopType;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_top_expand);
        TopType = getIntent().getStringExtra("TopType");
    }
}
