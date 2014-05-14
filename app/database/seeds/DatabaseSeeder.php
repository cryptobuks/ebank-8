<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$project_title = 'Pseudo Project';
		$desc = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Praesent vel ligula scelerisque, vehicula dui eu, fermentum velit. 
                    Phasellus ac ornare eros, quis malesuada augue. Nunc ac nibh at mauris dapibus fermentum. 
                    In in aliquet nisi, ut scelerisque arcu.';

        for($i = 0; $i<10; $i++)
        {
        	$enterprise = new Enterprise;
        	$enterprise->name = "enterprise{$i}";
        	$enterprise->password = '111111';
        	$enterprise->email = "enterprise{$i}@net.cn";
        	$enterprise->description = $desc;
        	$enterprise->approved = true;
        	$enterprise->save();
        	for($j = 0; $j<4; $j++)
        	{
        		$project = new Project;
        		$project->title = "project{$j}";
        		$project->description = $desc;
        		$project->approved = true;
        		$project->status = 0;
        		$project->expect_fund = 300000;
        		$project->expect_date = '2014-08-30';
        		$enterprise->projects()->save($project);

        	}
        }

        for($i = 1; $i<10; $i++)
        {
            $investor = new Investor;
            $investor->name = "investor{$i}";
            $investor->password = '111111';
            $investor->email = "investor{$i}@net.cn";
            $investor->gender = 'male';
            $investor->save();
            for($j = 1; $j<4; $j++)
            {
                $investment = new Investment;
                $investment->project_id = $j;
                $investment->description = $desc;
                $investment->paid_off = false;
                $investment->amount = 2000;
                $investor->investments()->save($investment);

            }
        }
	}

}
