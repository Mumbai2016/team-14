package com.atma.atma_14;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.TextView;

import de.hdodenhof.circleimageview.CircleImageView;

public class TopExpand extends AppCompatActivity {

    String TopType;
    CircleImageView currentImage,currentProject1,currentProject2,currentProject3,currentProject4;
    TextView currentSummary,currentName,currentProjectTitle1,currentProjectTitle2,currentProjectTitle3,currentProjectTitle4,TopTypeIndicator;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_top_expand);
        TopType = getIntent().getStringExtra("TopType");
        setUpViews();
        switch (TopType){
            case "Top Valunteer":
                currentName.setText("Niveta Lavhate");
                currentImage.setImageResource(R.drawable.girl);
                currentSummary.setText("Volunteering with ATMA foundation was one of the best decisions I ever made. Not only did it provide me great exposure and hands on experience organising and managing events, it also brought about the much needed tact I lacked in handling certain relationships. Today looking back, I miss the pearls of wisdom that was freely given, the constant vibe of camaraderie, and the fresh and hot afternoon snacks! ATMA foundation will always be thought of with a feeling of immense gratitude");

                currentProject1.setImageResource(R.drawable.ngo3);
                currentProject2.setImageResource(R.drawable.ngo5);
                currentProject3.setImageResource(R.drawable.ngo1);
                currentProject4.setImageResource(R.drawable.ngo4);

                currentProjectTitle1.setText("ACSI");
                currentProjectTitle2.setText("Bread for the world");
                currentProjectTitle3.setText("Mama's Children");
                currentProjectTitle4.setText("CFSD");

                TopTypeIndicator.setText("Top Volunteer");
                break;
            case "Top Partner Manager":

                currentName.setText("Ronak Parmar");
                currentImage.setImageResource(R.drawable.boy);
                currentSummary.setText("Living in Harmony’ training programme has highly improved the happiness quotient of our employees. We realised that a happy family of every employee results in better productivity at work effortlessly and it inevitably results in higher customer satisfaction.");

                currentProject1.setImageResource(R.drawable.ngo4);
                currentProject2.setImageResource(R.drawable.ngo3);
                currentProject3.setImageResource(R.drawable.ngo5);
                currentProject4.setImageResource(R.drawable.ngo1);

                currentProjectTitle1.setText("CFSD");
                currentProjectTitle2.setText("ASCI");
                currentProjectTitle3.setText("Bread for the world");
                currentProjectTitle4.setText("Mama's Children");

                TopTypeIndicator.setText("Top Partner Manager");
                break;
            case "Top NGO":

                currentName.setText("Mama's Children");
                currentImage.setImageResource(R.drawable.ngo1);
                currentSummary.setText(" Atma, to meet us, has been about meeting an organization that has integrity and is intelligent and noble. That some people exist who do care honestly about giving, and are also wise about how to give, and that they give with no expectations of returns is an eye opener. Atma has touched many individuals with wise counsel – thereby inspiring them to break open their shells and lead better, richer lives.");

                currentProject1.setImageResource(R.drawable.ngo1);
                currentProject2.setImageResource(R.drawable.ngo4);
                currentProject3.setImageResource(R.drawable.ngo5);
                currentProject4.setImageResource(R.drawable.ngo3);

                currentProjectTitle4.setText("CFSD");
                currentProjectTitle2.setText("ASCI");
                currentProjectTitle3.setText("Bread for the world");
                currentProjectTitle1.setText("Smile");

                TopTypeIndicator.setText("Top Partner Manager");

                break;
        }
    }

    private void setUpViews() {
        currentImage = (CircleImageView) findViewById(R.id.current_image);
        currentProject1 = (CircleImageView) findViewById(R.id.top_expand_currentworking1_image);
        currentProject2 = (CircleImageView) findViewById(R.id.top_expand_currentworking2_image);
        currentProject3 = (CircleImageView) findViewById(R.id.top_expand_currentworking3_image);
        currentProject4 = (CircleImageView) findViewById(R.id.top_expand_currentworking4_image);

        currentName = (TextView) findViewById(R.id.current_name);
        currentSummary = (TextView) findViewById(R.id.current_summary);
        currentProjectTitle1 = (TextView) findViewById(R.id.top_expand_currentworking1_textview);
        currentProjectTitle2 = (TextView) findViewById(R.id.top_expand_currentworking2_textview);
        currentProjectTitle3 = (TextView) findViewById(R.id.top_expand_currentworking3_textview);
        currentProjectTitle4 = (TextView) findViewById(R.id.top_expand_currentworking4_textview);

        TopTypeIndicator = (TextView) findViewById(R.id.toptypeIndicator);
    }
}
