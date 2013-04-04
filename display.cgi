#!/usr/bin/python

f = open("counter.txt")
count = f.readline()
count = count.strip('\n')
count = int(count)

print 'The number of visitors to the website is',count,'.'
