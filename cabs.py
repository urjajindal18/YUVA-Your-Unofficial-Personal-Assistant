
from selenium import webdriver
from selenium.webdriver.support.ui import Select
import time

url="https://cabbazar.com/city/chandigarh"


driver = webdriver.Chrome(r"D:\chromedriver")
driver.get(url)
driver.maximize_window()
time.sleep(1)
driver.find_element_by_id('localTab').click()

select = Select(driver.find_element_by_id('localCity'))
city=input("Enter city name you wish hire cab for:")
select.select_by_visible_text(city)
select=Select(driver.find_element_by_id('localPackage'))
select.select_by_index(1)
number=driver.find_element_by_id('localPhoneText')
number.send_keys('8004444444')
driver.find_element_by_xpath('//*[@id="localPanel"]/div/form/div[3]/button').click()




