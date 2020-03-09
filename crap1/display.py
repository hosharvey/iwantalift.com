import _mysql
db=_mysql.connect(host="localhost",user="pastainput",
                  passwd="spaghettiistheworstpasta",db="locationsite")
r=db.store_result()
r.fetch_row(x)
print(x)
