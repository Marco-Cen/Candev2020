#Consumer Price Index by product group, monthly, percentage change, not seasonally adjusted, Canada, provinces, Whitehorse, Yellowknife and Iqaluit
#u=(Québec, Montréal, Ottawa, Toronto, Vancouver)
u=c(130.9,133.3,136.7,139.9,134.4)
boxplot(u,main="CPI")
summary(u)
#2 POINTS: If index_city e (133.3,136.7)
#1 POINT: If index_city e (130.9,139.9)
#0 POINTS: Else