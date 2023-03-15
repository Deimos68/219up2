from selenium import webdriver
from selenium.webdriver.common.by import By 
import time

driver = webdriver.Chrome(executable_path="C:\\Apache24\\htdocs\\main.py\\main.py")
time.sleep(10)

try:
    driver.get(url="http://localhost/up2/")
    time.sleep(10)

except Exception as ex:
    print(ex)

finally:
    driver.close()