ALTER TABLE Users
ADD COLUMN childFirstname VARCHAR(30) NOT NULL,
ADD COLUMN childSurname VARCHAR(30) NOT NULL,
ADD COLUMN childBirthDay VARCHAR(30) NOT NULL,
ADD COLUMN childHomeAddressStreet VARCHAR(100) NOT NULL,
ADD COLUMN childHomeAddressNumber VARCHAR(30) NOT NULL,
ADD COLUMN childHomeAddressCity VARCHAR(50) NOT NULL,
ADD COLUMN childHomeAddressPostcode VARCHAR(30) NOT NULL,
ADD COLUMN legalRepresentativeFirstname VARCHAR(30) NOT NULL,
ADD COLUMN legalRepresentativeSurname VARCHAR(30) NOT NULL,
ADD COLUMN legalRepresentativeEmail VARCHAR(50) NOT NULL,
ADD COLUMN legalRepresentativePhone VARCHAR(30) NOT NULL,
ADD COLUMN legalRepresentativeHomeAddressStreet VARCHAR(100) NOT NULL,
ADD COLUMN legalRepresentativeHomeAddressNumber VARCHAR(30) NOT NULL,
ADD COLUMN legalRepresentativeHomeAddressCity VARCHAR(50) NOT NULL,
ADD COLUMN legalRepresentativeHomeAddressPostcode VARCHAR(30) NOT NULL,
ADD COLUMN note TEXT;
```to be used in mySql Workbench to alter the table."""
  