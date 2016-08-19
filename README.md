Droid inventory Terraform
======================

This application reads a `terraform.tfstate` and generates a `inventory.terraform.yml` file.

It supports extracting hosts, groups and public + private ip addresses.

Run the following command from a directory that contains your `terraform.tfstate` file:

    ./vendor/bin/droid-inventory-terraform inventory:terraform
    
This will generate `inventory.terraform.yml` based on the terraform state file.
