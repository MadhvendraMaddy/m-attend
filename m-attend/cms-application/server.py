


import os,shutil

print ("\n\n#######    Server is setting up    ####### \n\n")
#### current path of the file 

path = os.path.abspath(__file__)
currPath, _file_ = os.path.split(path)

print ("Fetching the path : ",path,"\n")


####  path of the httpd.conf file of xampp server

_dir_ = 'C:/xampp/apache/conf'

con_file = open(os.path.join(_dir_,"httpd.conf"),"r")

#con_file.seek(256)
lines = con_file.readlines()

#print ('>>\n',lines[245],'\n',lines[246])

lines[245] = 'DocumentRoot "'+str(currPath)+'"\n'
lines[246] = '<Directory "'+str(currPath)+'">\n'

#print ('>>\n',lines[245],'\n',lines[246])

#### re-writing the file 

con_file.close()
temp_file = open("httpd.conf","w")
temp_file.writelines(lines)
temp_file.close()

#### replacing the file 


#Remove original file
print (_dir_+"\httpd.conf")
os.remove(_dir_+"\httpd.conf")

#Move new file
# source , destination
shutil.move("httpd.conf",_dir_)


print ("Modification httpd done \n")


