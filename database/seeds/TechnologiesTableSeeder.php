<?php

use Illuminate\Database\Seeder;
use App\Technology;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data = [
          'Robotic Process Automation' => 'Robotic process automation (RPA) is the application of technology that allows employees in a company to configure computer software or a “robot” to capture and interpret existing applications for processing a transaction, manipulating data, triggering responses and communicating with other digital systems.',
          'Internet of Things' => 'The Internet of Things is the internetworking of physical devices, vehicles (also referred to as "connected devices" and "smart devices"), buildings, and other items—embedded with electronics, software, sensors, actuators, and network connectivity that enable these objects to collect and exchange data.',
          'DevOps' => 'DevOps (a clipped compound of development and operations) is a term used to refer to a set of practices that emphasizes the collaboration and communication of both software developers and other information-technology (IT) professionals while automating the process of software delivery and infrastructure changes.',
          'Testing' => 'Test automation is the use of special software tools to control the execution of tests and the comparison of actual outcomes with predicted outcomes. Test automation can automate some repetitive but necessary tasks in a formalized testing process already in place, or perform additional testing that would be difficult to do manually. Test automation is critical for continuous delivery and continuous testing.',
          'Requirements Management' => 'Requirements management is the process of documenting, analyzing, tracing, prioritizing and agreeing on requirements and then controlling change and communicating to relevant stakeholders. It is a continuous process throughout a project.',
          'Streaming Analytics' => 'Streaming analytics, also called event stream processing, is the analysis of large, in-motion data called event streams. These streams comprise events that occur as the result of an action or set of actions, such as a financial transaction, equipment failure, or some other trigger.',
          'Cybersecurity' => 'Cyber security, also referred to as information technology security, focuses on protecting computers, networks, programs, and data from unintended or unauthorized access, change, or destruction.',
          'Cloud Computing' => 'Cloud computing is a type of Internet-based computing that provides shared computer processing resources and data to computers and other devices on demand. It is a model for enabling ubiquitous, on-demand access to a shared pool of configurable computing resources (e.g., computer networks, servers, storage, applications and services), which can be rapidly provisioned and released with minimal management effort.',
          'Product Lifecycle Management' => 'In industry, product lifecycle management (PLM) is the process of managing the entire lifecycle of a product from inception, through engineering design and manufacture, to service and disposal of manufactured products.'
        ];

      foreach($data as $technologyName => $technologyDescription) {
          $technology = new Technology();
          $technology->name = $technologyName;
          $technology->description = $technologyDescription;
          $technology->save();
      }
    }
}
