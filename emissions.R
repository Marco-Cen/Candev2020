#Environment household CO2 emissions for gasoline and elect
#u=(Montréal, Vancouver, Québec, Ottawa, Toronto)
u=c(4.474,4.505,4.952,5.081, 5.260)
boxplot(u, main="Household CO2 emissions (gasoline and electricity)")
summary(u)
#2 POINTS: If index_city e (4.505,5.081)
#1 POINT: If index_city e (4.474,5.260)
#0 POINTS: Else