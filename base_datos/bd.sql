CREATE DATABASE proyecto_bases_de_datos;
CREATE TABLE Arl (
  cod_arl varchar(50) NOT NULL,
  arl varchar(150) NOT NULL,
  PRIMARY KEY(cod_arl) 
);

CREATE TABLE Cargo (
  cod_cargo varchar(50) NOT NULL,
  cargo varchar(150) NOT NULL,
    PRIMARY KEY(cod_cargo)
);

CREATE TABLE Eps (
  cod_eps varchar(50) NOT NULL,
  eps varchar(150) NOT NULL,
     PRIMARY KEY(cod_eps)
);

CREATE TABLE Dependencia (
  cod_dependencia varchar(50) NOT NULL,
  dependencia varchar(150) NOT NULL,
     PRIMARY KEY(cod_dependencia)
);
CREATE TABLE Pension (
  cod_pension varchar(50) NOT NULL,
  pension varchar(150) NOT NULL,
     PRIMARY KEY(cod_pension)
);

CREATE TABLE Empleado (
  cod_empleado varchar(50) NOT NULL,
  nombre varchar(150) NOT NULL,
  fecha_ingreso date NOT NULL,
  cod_arl varchar(50) NOT NULL,
  cod_cargo varchar(50) NOT NULL,
  cod_eps varchar(50) NOT NULL,
  cod_dependencia varchar(50) NOT NULL,
  cod_pension varchar(50) NOT NULL,
   PRIMARY KEY(cod_empleado),
  FOREIGN KEY(cod_arl) REFERENCES Arl(cod_arl),
    FOREIGN KEY(cod_cargo) REFERENCES Cargo(cod_cargo),
    FOREIGN KEY(cod_eps) REFERENCES Eps(cod_eps),
    FOREIGN KEY(cod_dependencia) REFERENCES Dependencia(cod_dependencia),
    FOREIGN KEY(cod_pension) REFERENCES Pension(cod_pension)
);
CREATE TABLE Nomina (
  cod_nomina varchar(50) NOT NULL,
  dias_laborados INT NOT NULL,
  bonificaciones INT NOT NULL,
  trasporte INT NOT NULL,
  sueldo INT NOT NULL,
  cod_empleado varchar(50) NOT NULL,
  PRIMARY KEY(cod_nomina),
  FOREIGN KEY(cod_empleado) REFERENCES Empleado(cod_empleado)
);


INSERT INTO Pension(cod_pension,pension) values ('P1', 'Colpensiones'),
('P2', 'Protección'),
('P3', 'Provenir'),
('P4', 'Skandia');

INSERT INTO Eps(cod_eps,eps) values ('B1', 'EPS-Sanitas'),
('B2', 'Aliansalud EPS'),
('B3', 'Nueva EPS'),
('B4', 'EPS-Sura');

INSERT INTO Cargo(cod_cargo,cargo) values ('A1', 'Ingeniero de Desarrollo'),
('A2', 'Auxiliar especializado'),
('A3', 'Director de Impuestos'),
('A4', 'Gerente de ventas'),
('A5', 'Director de Facturación'),
('A6', 'Ingeniero de Soporte'),
('A7', 'DBA'),
('A8', 'Auditor interno'),
('A9', 'Director de presupuestos'),
('A10', 'Líder de infraestructura'),
('A11', 'Director de cartera'),
('A12', 'Líder de QA'),
('A13', 'Director de costos'),
('A14', 'Director de ventas');

INSERT INTO Arl(cod_arl,arl) values ('1', 'Positiva '),
('2', 'Negativa');

INSERT INTO Dependencia(cod_dependencia,dependencia) values ('100', 'Tecnología'),
('101', 'Facturación'),
('102', 'Contabilidad'),
('103', 'Comercial');

INSERT INTO Empleado(cod_empleado,nombre,fecha_ingreso,cod_dependencia,cod_cargo,cod_eps,cod_arl,cod_pension) values ('5001', 'AGUDELO ESCOBAR EDWAR DAVID','2021-03-11', '100','A1', 'B1','1', 'P1'),
('5002', 'ALARCON CUBIDES JUAN PABLO','2020-10-30', '101','A2', 'B2','1', 'P2'),
('5003', 'ANDRADE ROJAS MARIO FERNANDO','2020-08-25', '100','A1', 'B3','1', 'P3'),
('5004', 'ARANGO CASTRO RAFAEL ESTEBAN','2022-02-17', '102','A3', 'B4','1', 'P4'),
('5005', 'BARON BECERRA WILLIAM ESTEBAN','2020-03-11', '100','A1', 'B1','1', 'P1'),
('5006', 'BELTRÁN CASTAÑO LOUIS ALEJANDRO','2020-03-10', '103','A4', 'B2','1', 'P4'),
('5007', 'BUITRAGO RIOS JOSE DAVID','2021-04-11', '101','A5', 'B3','1', 'P3'),
('5008', 'CABREJO TRUJILLO JUAN DAVID','2021-10-24', '100','A6', 'B4','1', 'P2'),
('5009', 'CAMARGO SERRANO ISABELLA','2020-05-21', '100','A7', 'B1','1', 'P1'),
('5010', 'CARRASQUILLA BAYTER HENRY SAMUEL','2020-08-12', '102','A8', 'B2','1', 'P4'),
('5011', 'CARVAJAL SANABRIA IVAN DAVID','2021-08-16', '102','A9', 'B3','1', 'P4'),
('5012', 'CASTRO GIRALDO JUAN MANUEL','2021-03-29', '100','A6', 'B4','1', 'P2'),
('5013', 'CASTRO PINILLA JUAN DIEGO','2021-07-21', '100','A10', 'B4','1', 'P1'),
('5014', 'CRUZ BALLESTEROS DAYAN ZELENE','2021-08-18', '102','A8', 'B1','1', 'P3'),
('5015', 'CRUZ MARTINEZ LUIS ESTEBAN','2020-08-28', '100','A10', 'B2','1', 'P2'),
('5016', 'ESCAMILLA BARRERO CRISTIAN CAMILO','2021-09-25', '101','A11', 'B3','1', 'P3'),
('5017', 'GIRALDO BRICEÑO SANTIAGO','2020-08-24', '100','A12', 'B4','1', 'P1'),
('5018', 'GOMEZ GOMEZ CRISTIAN ALBERTO','2021-09-11', '102','A13', 'B1','1', 'P3'),
('5019', 'GONZALEZ BUITRAGO DAVID ORLANDO','2022-03-26', '103','A14', 'B2','1', 'P2'),
('5020', 'LOZANO TOVAR JUAN PABLO','2021-10-18', '103','A14', 'B1','1', 'P3');

INSERT INTO Nomina(cod_nomina ,cod_empleado,dias_laborados,sueldo,bonificaciones,trasporte) values ('1', '5001',30, 4395489,649809, 39764),
('2', '5002',30, 3155500,328354, 27195),
('3', '5003',30, 3582542,406552, 36305),
('4', '5004',12, 3512579,670106, 7475),
('5', '5005',30, 4016192,228523, 28702),
('6', '5006',30, 3410252,494233, 1582),
('7', '5007',30, 3122766,818017, 8004),
('8', '5008',20, 3852689,569760, 38517),
('9', '5009',30, 2560603,336775, 14345),
('10', '5010',30, 3743655,632261, 17441),
('11', '5011',30, 3538638,157647, 25643),
('12', '5012',30, 3124336,442282, 24306),
('13', '5013',15, 4177447,542140, 47866),
('14', '5014',30, 2735729,890426, 17476),
('15', '5015',30, 3851336,552774, 36141),
('16', '5016',30, 4062175,557368, 11870),
('17', '5017',25, 3152891,37847, 11568),
('18', '5018',30, 4487658,391789, 44018),
('19', '5019',30, 4240924,515406, 25063),
('20', '5020',30, 3769836,94347, 34270);