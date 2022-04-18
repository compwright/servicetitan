openapi-generator generate -i ./spec/tenant-accounting-v2.yml -c ./openapi-generator.json -o build/accounting
mv build/accounting/lib/*.php src/
mv build/accounting/lib/Api/*.php src/Api/
mv build/accounting/lib/Model/*.php src/Model/
mv build/accounting/test/Api/*.php test/Api/
mv build/accounting/test/Model/*.php test/Model/
mv build/accounting/docs docs/accounting
mv build/accounting/README.md docs/accounting/
rm -Rf build/accounting

openapi-generator generate -i ./spec/tenant-crm-v2.yml -c ./openapi-generator.json -o build/crm
mv build/crm/lib/*.php src/
mv build/crm/lib/Api/*.php src/Api/
mv build/crm/lib/Model/*.php src/Model/
mv build/crm/test/Api/*.php test/Api/
mv build/crm/test/Model/*.php test/Model/
mv build/crm/docs docs/crm
mv build/crm/README.md docs/crm/
rm -Rf build/crm

openapi-generator generate -i ./spec/tenant-dispatch-v2.yml -c ./openapi-generator.json -o build/dispatch
mv build/dispatch/lib/*.php src/
mv build/dispatch/lib/Api/*.php src/Api/
mv build/dispatch/lib/Model/*.php src/Model/
mv build/dispatch/test/Api/*.php test/Api/
mv build/dispatch/test/Model/*.php test/Model/
mv build/dispatch/docs docs/dispatch
mv build/dispatch/README.md docs/dispatch/
rm -Rf build/dispatch

openapi-generator generate -i ./spec/tenant-equipment-systems-v2.yml -c ./openapi-generator.json -o build/equipmentsystems
mv build/equipmentsystems/lib/*.php src/
mv build/equipmentsystems/lib/Api/*.php src/Api/
mv build/equipmentsystems/lib/Model/*.php src/Model/
mv build/equipmentsystems/test/Api/*.php test/Api/
mv build/equipmentsystems/test/Model/*.php test/Model/
mv build/equipmentsystems/docs docs/equipmentsystems
mv build/equipmentsystems/README.md docs/equipmentsystems/
rm -Rf build/equipmentsystems

openapi-generator generate -i ./spec/tenant-forms-v2.yml -c ./openapi-generator.json -o build/forms
mv build/forms/lib/*.php src/
mv build/forms/lib/Api/*.php src/Api/
mv build/forms/lib/Model/*.php src/Model/
mv build/forms/test/Api/*.php test/Api/
mv build/forms/test/Model/*.php test/Model/
mv build/forms/docs docs/forms
mv build/forms/README.md docs/forms/
rm -Rf build/forms

openapi-generator generate -i ./spec/tenant-inventory-v2.yml -c ./openapi-generator.json -o build/inventory
mv build/inventory/lib/*.php src/
mv build/inventory/lib/Api/*.php src/Api/
mv build/inventory/lib/Model/*.php src/Model/
mv build/inventory/test/Api/*.php test/Api/
mv build/inventory/test/Model/*.php test/Model/
mv build/inventory/docs docs/inventory
mv build/inventory/README.md docs/inventory/
rm -Rf build/inventory

openapi-generator generate -i ./spec/tenant-jbce-v2.yml -c ./openapi-generator.json -o build/jbce
mv build/jbce/lib/*.php src/
mv build/jbce/lib/Api/*.php src/Api/
mv build/jbce/lib/Model/*.php src/Model/
mv build/jbce/test/Api/*.php test/Api/
mv build/jbce/test/Model/*.php test/Model/
mv build/jbce/docs docs/jbce
mv build/jbce/README.md docs/jbce/
rm -Rf build/jbce

openapi-generator generate -i ./spec/tenant-jpm-v2.yml -c ./openapi-generator.json -o build/jpm
mv build/jpm/lib/*.php src/
mv build/jpm/lib/Api/*.php src/Api/
mv build/jpm/lib/Model/*.php src/Model/
mv build/jpm/test/Api/*.php test/Api/
mv build/jpm/test/Model/*.php test/Model/
mv build/jpm/docs docs/jpm
mv build/jpm/README.md docs/jpm/
rm -Rf build/jpm

openapi-generator generate -i ./spec/tenant-marketing-v2.yml -c ./openapi-generator.json -o build/marketing
mv build/marketing/lib/*.php src/
mv build/marketing/lib/Api/*.php src/Api/
mv build/marketing/lib/Model/*.php src/Model/
mv build/marketing/test/Api/*.php test/Api/
mv build/marketing/test/Model/*.php test/Model/
mv build/marketing/docs docs/marketing
mv build/marketing/README.md docs/marketing/
rm -Rf build/marketing

openapi-generator generate -i ./spec/tenant-marketing-ads-v2.yml -c ./openapi-generator.json -o build/marketingads
mv build/marketingads/lib/*.php src/
mv build/marketingads/lib/Api/*.php src/Api/
mv build/marketingads/lib/Model/*.php src/Model/
mv build/marketingads/test/Api/*.php test/Api/
mv build/marketingads/test/Model/*.php test/Model/
mv build/marketingads/docs docs/marketingads
mv build/marketingads/README.md docs/marketingads/
rm -Rf build/marketingads

openapi-generator generate -i ./spec/tenant-memberships-v2.yml -c ./openapi-generator.json -o build/memberships
mv build/memberships/lib/*.php src/
mv build/memberships/lib/Api/*.php src/Api/
mv build/memberships/lib/Model/*.php src/Model/
mv build/memberships/test/Api/*.php test/Api/
mv build/memberships/test/Model/*.php test/Model/
mv build/memberships/docs docs/memberships
mv build/memberships/README.md docs/memberships/
rm -Rf build/memberships

openapi-generator generate -i ./spec/tenant-payroll-v2.yml -c ./openapi-generator.json -o build/payroll
mv build/payroll/lib/*.php src/
mv build/payroll/lib/Api/*.php src/Api/
mv build/payroll/lib/Model/*.php src/Model/
mv build/payroll/test/Api/*.php test/Api/
mv build/payroll/test/Model/*.php test/Model/
mv build/payroll/docs docs/payroll
mv build/payroll/README.md docs/payroll/
rm -Rf build/payroll

openapi-generator generate -i ./spec/tenant-pricebook-v2.yml -c ./openapi-generator.json -o build/pricebook
mv build/pricebook/lib/*.php src/
mv build/pricebook/lib/Api/*.php src/Api/
mv build/pricebook/lib/Model/*.php src/Model/
mv build/pricebook/test/Api/*.php test/Api/
mv build/pricebook/test/Model/*.php test/Model/
mv build/pricebook/docs docs/pricebook
mv build/pricebook/README.md docs/pricebook/
rm -Rf build/pricebook

openapi-generator generate -i ./spec/tenant-salestech-v2.yml -c ./openapi-generator.json -o build/salestech
mv build/salestech/lib/*.php src/
mv build/salestech/lib/Api/*.php src/Api/
mv build/salestech/lib/Model/*.php src/Model/
mv build/salestech/test/Api/*.php test/Api/
mv build/salestech/test/Model/*.php test/Model/
mv build/salestech/docs docs/salestech
mv build/salestech/README.md docs/salestech/
rm -Rf build/salestech

openapi-generator generate -i ./spec/tenant-settings-v2.yml -c ./openapi-generator.json -o build/settings
mv build/settings/lib/*.php src/
mv build/settings/lib/Api/*.php src/Api/
mv build/settings/lib/Model/*.php src/Model/
mv build/settings/test/Api/*.php test/Api/
mv build/settings/test/Model/*.php test/Model/
mv build/settings/docs docs/settings
mv build/settings/README.md docs/settings/
rm -Rf build/settings

openapi-generator generate -i ./spec/tenant-task-management-v2.yml -c ./openapi-generator.json -o build/taskmanagement
mv build/taskmanagement/lib/*.php src/
mv build/taskmanagement/lib/Api/*.php src/Api/
mv build/taskmanagement/lib/Model/*.php src/Model/
mv build/taskmanagement/test/Api/*.php test/Api/
mv build/taskmanagement/test/Model/*.php test/Model/
mv build/taskmanagement/docs docs/taskmanagement
mv build/taskmanagement/README.md docs/taskmanagement/
rm -Rf build/taskmanagement

openapi-generator generate -i ./spec/tenant-telecom-v2.yml -c ./openapi-generator.json -o build/telecom
mv build/telecom/lib/*.php src/
mv build/telecom/lib/Api/*.php src/Api/
mv build/telecom/lib/Model/*.php src/Model/
mv build/telecom/test/Api/*.php test/Api/
mv build/telecom/test/Model/*.php test/Model/
mv build/telecom/docs docs/telecom
mv build/telecom/README.md docs/telecom/
rm -Rf build/telecom

rmdir build
