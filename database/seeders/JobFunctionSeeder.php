<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobFunctionSeeder extends Seeder
{
    private $job_functions = [
        "Accountant",
        "Accountant, Financial - Tax Consultant, Auditor",
        "Accounting, Auditing & Finance",
        "Accounts, Finance & Financial Services",
        "Actuary",
        "Admin",
        "Admin & Office",
        "Admin Operation",
        "Administration",
        "Administration Clerical",
        "Administrator",
        "Advertising",
        "Advertising, Media & Communications",
        "Advertisment",
        "Agriculture, Fishing & Forestry",
        "Architects & Construction",
        "Architecture",
        "Art & Design",
        "Automotive & Aviation",
        "Bank Operation",
        "Banking, Finance & Insurance",
        "Building & Architecture",
        "Business Development",
        "Business Management",
        "Business Systems Analyst",
        "Clerical",
        "Client Services & Customer Support",
        "Community & Social Services",
        "Computer Hardware",
        "Computer Networking",
        "Construction",
        "Consultant",
        "Consulting & Strategy",
        "Content Writer",
        "Corporate Affairs",
        "Creative & Design",
        "Creative Design",
        "Creative Writer",
        "Customer Service & Support",
        "Customer Support",
        "Data Entry",
        "Data Entry Operator",
        "Database Administration (DBA)",
        "Development",
        "Digital, Media & Communications",
        "Distribution & Logistics",
        "Driver & Transport Services",
        "Education",
        "Electronics Technician",
        "Energy & Utilities",
        "Enforcement & Security",
        "Engineering",
        "Engineering & Technology",
        "Entertainment, Events & Sport",
        "Estate Agents & Property Management",
        "Executive Management",
        "Executive Secretary",
        "Farming & Agriculture",
        "Field Operations",
        "Food Services & Catering",
        "Front Desk Clerk",
        "Front Desk Officer",
        "Government",
        "Graphic Design",
        "Hardware",
        "Health & Medicine",
        "Health & Safety",
        "Health Care",
        "Health Related",
        "Healthcare",
        "Hospitality & Hotel",
        "Hospitality & Leisure",
        "Hotel Management",
        "Hotel/Restaurant Management",
        "HR",
        "Human Resources",
        "Import & Export",
        "Industrial Production",
        "Installation & Repair",
        "Interior Designers & Architects",
        "Intern",
        "Internship",
        "Investment Operations",
        "IT & Telecoms",
        "IT Security",
        "IT Systems Analyst",
        "Law & Compliance",
        "Legal & Corporate Affairs",
        "Legal Affairs",
        "Legal Research",
        "Legal Services",
        "Logistics & Warehousing",
        "Maintenance/Repair",
        "Management & Business Development",
        "Management Consulting",
        "Management Information System (MIS)",
        "Managerial",
        "Manufacturing",
        "Manufacturing & Operations",
        "Manufacturing & Warehousing",
        "Marketing",
        "Marketing & Communications",
        "Media & Advertising",
        "Media - Print & Electronic",
        "Medical",
        "Medical & Pharmaceutical",
        "Medicine",
        "Merchandising",
        "Merchandising & Product Management",
        "Mining, Energy & Metals",
        "Monitoring & Evaluation (M&E)",
        "Network Administration",
        "Network Operation",
        "NGO, NPO & Charity",
        "Online Advertising",
        "Online Marketing",
        "Operations",
        "Planning",
        "Planning & Development",
        "PR",
        "Print Media",
        "Printing",
        "Procurement",
        "Product & Project Management",
        "Product Developer",
        "Product Development",
        "Product Management",
        "Production",
        "Production & Quality Control",
        "Project Management",
        "Project Management Consultant",
        "Public Relations",
        "QA",
        "QC",
        "Qualitative Research",
        "Quality Assurance (QA)",
        "Quality Control",
        "Quality Control & Assurance",
        "Quality Inspection",
        "Real Estate",
        "Recruiting",
        "Recruitment",
        "Repair & Overhaul",
        "Research & Development (R&D)",
        "Research & Evaluation",
        "Research & Fellowships",
        "Research, Teaching & Training",
        "Researcher",
        "Restaurant Management",
        "Retail",
        "Retail & Wholesale",
        "Retail Buyer",
        "Retail Buying",
        "Retail Merchandising",
        "Retail, Fashion & FMCG",
        "Safety & Environment",
        "Sales",
        "Sales & Business Development",
        "Sales Support",
        "Search Engine Optimization (SEO)",
        "Secretarial, Clerical & Front Office",
        "Security",
        "Security & Environment",
        "Security Guard",
        "SEM",
        "Shipping & Logistics",
        "SMO",
        "Software & Data",
        "Software & Web Development",
        "Software Engineer",
        "Software Testing",
        "Stores & Warehousing",
        "Supply Chain",
        "Supply Chain & Procurement",
        "Supply Chain Management",
        "Systems Analyst",
        "Teachers/Education, Training & Development",
        "Technical Writer",
        "Technology",
        "Tele Sale Representative",
        "Telemarketing",
        "Tourism & Travel",
        "Trades & Services",
        "Training & Development",
        "Transportation & Warehousing",
        "TSR",
        "Typing",
        "Warehousing",
        "Web Developer",
        "Web Marketing",
        "Writer",
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->job_functions as $job_function) {
            DB::table('job_functions')->insert([
                'name' => $job_function
            ]);
        }
    }
}
