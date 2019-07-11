import pandas as pd 
import mysql.connector

conexion1=mysql.connector.connect(host="localhost", 
                                  user="root", 
                                  passwd="root", 
                                  database="guayacan")
cursor1=conexion1.cursor()


df = pd.read_csv("c:/xampp/htdocs/coope/modulos/DataPrueba.csv")
print(df)
sql="INSERT INTO dataprueba (COD_SOCIO, NOMBRE, APELLIDO1, APELLIDO2, NO_TC, FCH_CON, MONTO, SALDO) values(%s, %s, %s, %s, %s, %s, %s)"
#item["COD_SOCIO"]

for item in df.index:
    cursor1.execute(sql)

#id = df['id'][0]
#name = df['nombre'][0]
#print(id)
#print(name)
#datos=(id, name)
#cursor1.execute(sql, datos)

#datos=(10,"naranjas")
#cursor1.execute(sql, datos)
#datos=(11, "peras")
#cursor1.execute(sql, datos)
#datos=(12, "bananas")
#cursor1.execute(sql, datos)
conexion1.commit()
conexion1.close() 