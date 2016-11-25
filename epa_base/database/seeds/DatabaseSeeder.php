<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(User_typeTableSeeder::class);
        $this->call(User_store_managerTableSeeder::class);
        $this->call(User_adminTableSeeder::class);

        $this->call(CategoryTableSeeder::class);        
        $this->call(Subcategory_PC_parts_TableSeeder::class);
        $this->call(Subcategory_laptops_TableSeeder::class);
        $this->call(Subcategory_software_TableSeeder::class);   
        $this->call(Subcategory_peripherals_TableSeeder::class);
        $this->call(BrandsTableSeeder::class);

        $this->call(Product_pc_case_TableSeeder::class);
        $this->call(Product_pc_cpu_fan_TableSeeder::class);
        $this->call(Product_pc_graphics_card_TableSeeder::class);
        $this->call(Product_pc_hardisk_TableSeeder::class);
        $this->call(Product_pc_memory_TableSeeder::class);
        $this->call(Product_pc_motherboard_TableSeeder::class);
        $this->call(Product_pc_NIC_cards_TableSeeder::class);
        $this->call(Product_pc_Power_Supply_TableSeeder::class);
        $this->call(Product_pc_processor_TableSeeder::class); 
        $this->call(Product_laptop_TableSeeder::class);
        $this->call(Product_Battery_TableSeeder::class);
        $this->call(Product_charger_TableSeeder::class);
        $this->call(Product_LCD_SCREEN_TableSeeder::class);
        $this->call(Product_Antivirus_TableSeeder::class);
        $this->call(Product_Office_Application_TableSeeder::class);
        $this->call(Product_Operating_System_TableSeeder::class);
        $this->call(Product_AVR_UPS_TableSeeder::class);
        $this->call(Product_Cables_TableSeeder::class);
        $this->call(Product_Camera_TableSeeder::class);
        $this->call(Product_Headset_TableSeeder::class);
        $this->call(Product_Keyboards_TableSeeder::class);       
        $this->call(Product_Monitor_TableSeeder::class);    
        $this->call(Product_Mouse_TableSeeder::class);    
        $this->call(Product_Modem_TableSeeder::class);    
        $this->call(Product_Printers_Scanners_TableSeeder::class);   
        $this->call(Product_Speakers_TableSeeder::class);    
        $this->call(Product_Storage_Devices_TableSeeer::class);    

        $this->call(Image_Case_TableSeeder::class);
        $this->call(Image_CPU_FAN_TableSeeder::class);    
        $this->call(Image_Graphics_Card_TableSeeder::class);
        $this->call(Image_Hard_Disk_TableSeeder::class); 
        $this->call(Image_Memory_TableSeeder::class);     
        $this->call(Image_Motherboard_TableSeeder::class);    
        $this->call(Image_NIC_Cards_TableSeeder::class);  
        $this->call(Image_PowerSupply_TableSeeder::class);  
        $this->call(Image_Processor_TableSeeder::class); 
        $this->call(Image_Laptop_TableSeeder::class); 
        $this->call(Image_Battery_TableSeeder::class); 
        $this->call(Image_Charger_TableSeeder::class); 
        $this->call(Image_LCD_Screen_TableSeeder::class); 
        $this->call(Image_Antivirus_TableSeeder::class);
        $this->call(Image_OfficeApplication_TableSeeder::class);
        $this->call(Image_OperatingSystem_TableSeeder::class);
        $this->call(Image_AVR_UPS_TableSeeder::class);
        $this->call(Image_Cables_TableSeeder::class);
        $this->call(Image_Headsets_TableSeeder::class);
        $this->call(Image_Camera_TableSeeder::class);
        $this->call(Image_Keyboards_TableSeeder::class);
        $this->call(Image_Monitor_TableSeeder::class);
        $this->call(Image_Mouse_TableSeeder::class);
         $this->call(Image_Modem_TableSeeder::class);
         $this->call(Image_Printer_Scanner_TableSeeder::class);
         $this->call(Image_Speaker_TableSeeder::class);
          $this->call(Image_StorageDevices_TableSeeder::class);
                 

 
    }
}


