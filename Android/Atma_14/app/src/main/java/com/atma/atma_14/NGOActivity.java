package com.atma.atma_14;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.support.v7.widget.LinearLayoutManager;
import android.support.v7.widget.RecyclerView;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.TextView;

import java.util.ArrayList;

import de.hdodenhof.circleimageview.CircleImageView;

public class NGOActivity extends AppCompatActivity {

    RecyclerView NGORecyclerView;
    ArrayList<recyclerStructure> array;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_ngo);
        NGORecyclerView = (RecyclerView) findViewById(R.id.recyclerViewNGO);
        NGORecyclerView.setHasFixedSize(true);
        NGORecyclerView.setLayoutManager(new LinearLayoutManager(this));
        array = new ArrayList<>();
        addData();
    }

    private void addData() {
        array.add(new recyclerStructure("NGO 1", "NGO Details 1", R.drawable.girl));
        array.add(new recyclerStructure("NGO 2", "NGO Details 2", R.drawable.girl));
        array.add(new recyclerStructure("NGO 3", "NGO Details 3", R.drawable.girl));
        array.add(new recyclerStructure("NGO 4", "NGO Details 4", R.drawable.girl));
        array.add(new recyclerStructure("NGO 5", "NGO Details 5", R.drawable.girl));
    }

    public class NGORecyclerAdapter extends RecyclerView.Adapter<NGORecyclerAdapter.NGORecyclerViewHolder>{

        ArrayList<recyclerStructure> arrayData;

        NGORecyclerAdapter(ArrayList<recyclerStructure> arrayData){
            this.arrayData = arrayData;
        }

        @Override
        public NGORecyclerViewHolder onCreateViewHolder(ViewGroup parent, int viewType) {
            View v = LayoutInflater.from(getBaseContext()).inflate(R.layout.recycler_layout,parent,false);
            NGORecyclerViewHolder holder = new NGORecyclerViewHolder(v);
            return holder;
        }

        @Override
        public void onBindViewHolder(NGORecyclerViewHolder holder, int position) {
            holder.NgoTitle.setText(arrayData.get(position).NGOName);
            holder.NgoDetails.setText(arrayData.get(position).NGODetails);
            holder.NgoImage.setImageResource(arrayData.get(position).image);
        }

        @Override
        public int getItemCount() {
            return 0;
        }

        public class NGORecyclerViewHolder extends RecyclerView.ViewHolder{

            TextView NgoTitle,NgoDetails;
            CircleImageView NgoImage;
            public NGORecyclerViewHolder(View itemView) {
                super(itemView);

                NgoDetails = (TextView) itemView.findViewById(R.id.NGOProjectDetails);
                NgoTitle = (TextView) itemView.findViewById(R.id.NGOProjectName);
                NgoImage = (CircleImageView) itemView.findViewById(R.id.NGOImage);
            }
        }

        @Override
        public void onAttachedToRecyclerView(RecyclerView recyclerView) {
            super.onAttachedToRecyclerView(recyclerView);
        }
    }


    class recyclerStructure{
        String NGOName, NGODetails;
        int image;

        recyclerStructure(String NGOName,String NGODetails,int image){
            this.image = image;
            this.NGODetails = NGODetails;
            this.NGOName = NGOName;
        }
    }

}
