#Canada Mortgage and Housing Corporation, vacancy rates, apartment structures of six units and over, privately initiated in census metropolitan areas
#u=(Montréal, Ottawa, Toronto, Vancouver)
u=c(1.6,1.8,1.5,1.1)
boxplot(u, main="Vacancy Rates")
#Québec is not considered, because it would be an outlier
summary(u)
#2 POINTS: If index_city e (1.4,1.65)
#1 POINT: If index_city e (1.1,1.8)\(1.4,1.65)
#0 POINTS: Else