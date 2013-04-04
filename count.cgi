#!/usr/bin/python

f = open("counter.txt", 'r+')
count = f.readline()
count = count.strip('\n')
count = int(count)
count = count + 1
count = str(count)
f.seek(0)
f.write(count)
f.close()

