from libs import welcome_message, exit_program
from games import cuypy
from tools import waroong

def menu():
    user_option = int(input(f'please choose the program menu you want to run:\n1. Cuypy the Cave\n2. Mini Waroong\n3. Exit\n\n\nyour choice: '))
    
    if user_option == 1:
        cuypy.start()
    elif user_option == 2:
        waroong.start()
    elif user_option == 3:
        exit_program()
    else:
        print('invalid option! please restart the program and choose a valid option.')
    
def main():
    welcome_message()
    menu()
    
if __name__ == '__main__':
    main()
